<?php
define('USE_INTERSECT', TRUE);

require_once "XML/Util.php";

/**
 *  DataEngine class
 *
 *  Format of search criteria: hash, with following structure:<br>
 *   <ul>
 *     <li>filetype - string, type of searched files,
 *       meaningful values: 'audioclip', 'webstream', 'playlist', 'all'</li>
 *     <li>operator - string, type of conditions join
 *       (any condition matches / all conditions match),
 *       meaningful values: 'and', 'or', ''
 *       (may be empty or ommited only with less then 2 items in
 *       &quot;conditions&quot; field)
 *     </li>
 *     <li>orderby : string - metadata category for sorting (optional)
 *          or array of strings for multicolumn orderby
 *          [default: dc:creator, dc:source, dc:title]
 *     </li>
 *     <li>desc : boolean - flag for descending order (optional)
 *          or array of boolean for multicolumn orderby
 *          (it corresponds to elements of orderby field)
 *          [default: all ascending]
 *     </li>
 *     <li>conditions - array of hashes with structure:
 *       <ul>
 *           <li>cat - string, metadata category name</li>
 *           <li>op - string, operator - meaningful values:
 *               'full', 'partial', 'prefix', '=', '&lt;',
 *               '&lt;=', '&gt;', '&gt;='</li>
 *           <li>val - string, search value</li>
 *       </ul>
 *     </li>
 *   </ul>
 *  <p>
 *  Format of search/browse results: hash, with following structure:<br>
 *   <ul>
 *      <li>results : array of gunids have found</li>
 *      <li>cnt : integer - number of matching items</li>
 *   </ul>
 *
 * @Author $Author$
 * @version  $Revision$
 * @package Campcaster
 * @subpackage StorageServer
 * @see MetaData
 * @see StoredFile
 */
class DataEngine {

    /**
     * Constructor
     *
     * @param BasicStor $gb
     */
    function DataEngine(&$gb)
    {
        $this->gb =& $gb;
        $this->dbc =& $gb->dbc;
        $this->mdataTable = $gb->mdataTable;
        $this->filesTable = $gb->filesTable;
        $this->filetypes = array(
            'all'=>NULL,
            'audioclip'=>'audioclip',
            'webstream'=>'webstream',
            'playlist'=>'playlist',
        );
    }


    /**
     * Method returning array with where-parts of sql queries
     *
     * @param array $conditions
     * 		See 'conditions' field in search criteria format
     *      definition in DataEngine class documentation
     * @return array
     * 		array of strings - WHERE-parts of SQL queries
     */
    function _makeWhereArr($conditions)
    {
        $ops = array('full'=>"='%s'", 'partial'=>"like '%%%s%%'",
            'prefix'=>"like '%s%%'", '<'=>"< '%s'", '='=>"= '%s'",
            '>'=>"> '%s'", '<='=>"<= '%s'", '>='=>">= '%s'"
        );
        $whereArr   = array();
        if (is_array($conditions)) {
            foreach ($conditions as $cond) {
                $catQn = $cond['cat'];
                $op = strtolower($cond['op']);
                $value = strtolower($cond['val']);
                $splittedQn = XML_Util::splitQualifiedName($catQn);
                $catNs = $splittedQn['namespace'];
                $cat = $splittedQn['localPart'];
                $opVal = sprintf($ops[$op], pg_escape_string($value));
                // retype for timestamp value
                if ($cat == 'mtime') {
                    switch ($op) {
                        case 'partial':
                        case 'prefix':
                        	break;
                        default:
                            $retype = "::timestamp with time zone";
                            $opVal = "$retype $opVal$retype";
                    }
                }
                // escape % for sprintf in whereArr construction:
                $cat = str_replace("%", "%%", $cat);
                $opVal = str_replace("%", "%%", $opVal);
                $sqlCond =
                    " %s.predicate = '{$cat}' AND".
                    " %s.objns='_L' AND %s.predxml='T'".
                    " AND lower(%s.object) {$opVal}\n";
                if (!is_null($catNs)) {
                    $catNs  = str_replace("%", "%%", $catNs);
                    $sqlCond = " %s.predns = '{$catNs}' AND $sqlCond";
                }
                $whereArr[] = $sqlCond;
            }
        }
        return $whereArr;
    }


    /**
     * Method returning SQL query for search/browse with AND operator
     * (without using INTERSECT command)
     *
     * @param string $fldsPart
     * 		fields part of SQL query
     * @param array $whereArr
     * 		array of WHERE-parts
     * @param string $fileCond
     * 		Condition for files table
     * @param boolean $browse
     * 		TRUE if browse vals required instead of gunids
     * @param string $brFldNs
     * 		Namespace prefix of category for browse
     * @param string $brFld
     * 		Category for browse
     * @return string
     * 		query
     */
    function _makeAndSqlWoIntersect($fldsPart, $whereArr, $fileCond, $browse,
        $brFldNs=NULL, $brFld=NULL)
    {
        $innerBlocks = array();
        foreach ($whereArr as $i => $v) {
            $whereArr[$i] = sprintf($v, "md$i", "md$i", "md$i", "md$i", "md$i");
            $lastTbl = ($i==0 ? "f" : "md".($i-1));
            $innerBlocks[] = "INNER JOIN {$this->mdataTable} md$i ON md$i.gunid = $lastTbl.gunid\n";
        }
        // query construcion:
        $sql =  "SELECT $fldsPart\nFROM {$this->filesTable} f\n".join("", $innerBlocks);
        if ($browse) {
            $sql .= "INNER JOIN {$this->mdataTable} br".
                "\n ON br.gunid = f.gunid AND br.objns='_L'".
                " AND br.predicate='{$brFld}' AND br.predxml='T'";
            if (!is_null($brFldNs)) {
            	$sql .= " AND br.predns='{$brFldNs}'";
            }
            $sql .= "\n";
        }
        if (!is_null($fileCond)) {
        	$whereArr[] = " $fileCond";
        }
        if (count($whereArr) > 0) {
        	$sql .= "WHERE\n".join("  AND\n", $whereArr);
        }
        if ($browse) {
        	$sql .= "\nORDER BY br.object";
        }
        return $sql;
    }


    /**
     * Method returning SQL query for search/browse with AND operator
     * (using INTERSECT command)
     *
     * @param string $fldsPart
     * 		Fields part of sql query
     * @param array $whereArr
     * 		Array of where-parts
     * @param string $fileCond
     * 		Condition for files table
     * @param boolean $browse
     * 		true if browse vals required instead of gunids
     * @param string $brFldNs
     * 		namespace prefix of category for browse
     * @param string $brFld
     * 		category for browse
     * @return string
     * 		query
     */
    function _makeAndSql($fldsPart, $whereArr, $fileCond, $browse,
        $brFldNs=NULL, $brFld=NULL)
    {
        if (!USE_INTERSECT) {
        	return $this->_makeAndSqlWoIntersect($fldsPart, $whereArr, $fileCond, $browse, $brFldNs, $brFld);
        }
        $isectBlocks = array();
        foreach ($whereArr as $i => $v) {
            $whereArr[$i] = sprintf($v, "md$i", "md$i", "md$i", "md$i", "md$i");
            $isectBlocks[] =
                " SELECT gunid FROM {$this->mdataTable} md$i\n".
                " WHERE\n {$whereArr[$i]}";
        }
        // query construcion:
        if (count($isectBlocks)>0) {
            $isectBlock =
                "FROM\n(\n".join("INTERSECT\n", $isectBlocks).") sq\n".
                "INNER JOIN {$this->filesTable} f ON f.gunid = sq.gunid";
        } else {
            $isectBlock = "FROM {$this->filesTable} f";
        }
        $sql = "SELECT $fldsPart\n".$isectBlock;
        if ($browse) {
            $sql .= "\nINNER JOIN {$this->mdataTable} br ON br.gunid = f.gunid\n".
            		"WHERE br.objns='_L' AND br.predxml='T' AND br.predicate='{$brFld}'";
            if (!is_null($brFldNs)) {
            	$sql .= " AND br.predns='{$brFldNs}'";
            }
            $glue = " AND";
        } else {
        	$glue = "WHERE";
        }
        if (!is_null($fileCond)) {
        	$sql .= "\n$glue $fileCond";
        }
        if ($browse) {
        	$sql .= "\nORDER BY br.object";
        }
        return $sql;
    }

    /**
     * Method returning SQL query for search/browse with OR operator
     *
     * @param string $fldsPart
     * 		Fields part of sql query
     * @param array $whereArr
     * 		Array of where-parts
     * @param string $fileCond
     * 		Condition for files table
     * @param boolean $browse
     * 		True if browse vals required instead of gunids
     * @param string $brFldNs
     * 		Namespace prefix of category for browse
     * @param string $brFld
     * 		Category for browse
     * @return string
     * 		query
     */
    function _makeOrSql($fldsPart, $whereArr, $fileCond, $browse,
        $brFldNs=NULL, $brFld=NULL)
    {
        //$whereArr[] = " FALSE\n";
        foreach ($whereArr as $i => $v) {
            $whereArr[$i] = sprintf($v, "md", "md", "md", "md", "md");
        }
        // query construcion:
        $sql = "SELECT $fldsPart\nFROM {$this->filesTable} f\n";
        if ($browse) {
            $sql .= "INNER JOIN {$this->mdataTable} br".
                "\n ON br.gunid = f.gunid AND br.objns='_L'".
                " AND br.predxml='T' AND br.predicate='{$brFld}'";
            if (!is_null($brFldNs)) {
            	$sql .= " AND br.predns='{$brFldNs}'";
            }
            $sql .= "\n";
        }
        if (count($whereArr) > 0) {
            $sql .= "INNER JOIN {$this->mdataTable} md ON md.gunid=f.gunid\n";
            $sql .= "WHERE\n(\n".join("  OR\n", $whereArr).")";
            $glue = " AND";
        } else {
        	$glue = "WHERE";
        }
        if (!is_null($fileCond)) {
        	$sql .= "$glue $fileCond";
        }
        if ($browse) {
        	$sql .= "\nORDER BY br.object";
        }
        return $sql;
    }


    /**
     * Search in local metadata database.
     *
     * @param array $cri
     * 		Search criteria see DataEngine class documentation
     * @param int $limit
     * 		Limit for result arrays (0 means unlimited)
     * @param int $offset
     * 		Starting point (0 means without offset)
     * @return array
     * 		hash, fields:
     *       results : array with gunid strings
     *       cnt : integer - number of matching gunids
     *              of files have been found
     */
    function localSearch($cri, $limit=0, $offset=0)
    {
        $res = $this->_localGenSearch($cri, $limit, $offset);
        // if (PEAR::isError($res)) return $res;
        return $res;
    }


    /**
     * Search in local metadata database, more general version.
     *
     * @param hash $criteria
     * 		Search criteria see DataEngine class documentation
     * @param int $limit
     * 		Limit for result arrays (0 means unlimited)
     * @param int $offset
     * 		Starting point (0 means without offset)
     * @param string $brFldNs
     * 		Namespace prefix of category for browse
     * @param string $brFld
     * 		Metadata category identifier for browse
     * @return array
     * 		arrays of hashes, fields:
     *       cnt : integer - number of matching gunids
     *              of files have been found
     *       results : array of hashes:
     *          gunid: string
     *          type: string - audioclip | playlist | webstream
     *          title: string - dc:title from metadata
     *          creator: string - dc:creator from metadata
     *          source: string - dc:source from metadata
     *          length: string - dcterms:extent in extent format
     *     OR (in browse mode)
     *       results: array of strings - browsed values
     */
    function _localGenSearch($criteria, $limit=0, $offset=0,
        $brFldNs=NULL, $brFld=NULL)
    {
        $filetype = (isset($criteria['filetype']) ? $criteria['filetype'] : 'all');
        $filetype = strtolower($filetype);
        if (!array_key_exists($filetype, $this->filetypes)) {
            return PEAR::raiseError(
                'DataEngine::_localGenSearch: unknown filetype in search criteria'
            );
        }
        $filetype = $this->filetypes[$filetype];
        $operator = (isset($criteria['operator']) ? $criteria['operator'] : 'and');
        $operator = strtolower($operator);
        $conditions = (isset($criteria['conditions']) ? $criteria['conditions'] : array());
        $whereArr = $this->_makeWhereArr($conditions);
        $orderby = TRUE;                     // if there is any default
        if ( (!isset($criteria['orderby'])) || (is_array($criteria['orderby']) && (count($criteria['orderby'])<1) ) ) {
            $orderbyQns  = array('dc:creator', 'dc:source', 'dc:title');      // default
        } else {
            $orderbyQns  = $criteria['orderby'];
        }
        if (!is_array($orderbyQns)) {
            $orderbyQns = array($orderbyQns);
        }
        $desc = (isset($criteria['desc']) ? $criteria['desc'] : NULL);
        $orderJoinSql = array();
        $orderBySql = array();
        foreach($orderbyQns as $j=>$orderbyQn){
            $i = $j+1;
            $obSplitQn = XML_Util::splitQualifiedName($orderbyQn);
            $obNs = $obSplitQn['namespace'];
            $obLp = $obSplitQn['localPart'];
            $desc = (isset($criteria['desc'][$i]) ? $criteria['desc'][$i] : NULL);
            $retype = ($obLp == 'mtime' ? '::timestamp with time zone' : '' );
            $orderJoinSql[] =
                "LEFT JOIN {$this->mdataTable} m$i\n".
                "  ON m$i.gunid = sq2.gunid AND m$i.predicate='$obLp'".
                " AND m$i.objns='_L' AND m$i.predxml='T'".
                (!is_null($obNs)? " AND m$i.predns='$obNs'":'');
            $orderBySql[] =
                "m$i.object".$retype.($desc? ' DESC':'');
        }
        $browse = !is_null($brFld);
        if (!$browse) {
            if (!$orderby) {
                $fldsPart = "DISTINCT to_hex(f.gunid)as gunid, f.ftype, f.id";
            } else {
                $fldsPart = "DISTINCT f.gunid, f.ftype, f.id";
            }
        } else {
            $fldsPart = "DISTINCT br.object as txt";
        }
        $limitPart = ($limit != 0 ? " LIMIT $limit" : '' ).
            ($offset != 0 ? " OFFSET $offset" : '' );
        $fileCond = "f.state='ready'";
        if (!is_null($filetype)) {
        	$fileCond .= " AND f.ftype='$filetype'";
        }
        if ($operator == 'and') {     // operator: and
            $sql = $this->_makeAndSql($fldsPart, $whereArr, $fileCond, $browse, $brFldNs, $brFld);
        } else {          // operator: or
            $sql = $this->_makeOrSql($fldsPart, $whereArr, $fileCond, $browse, $brFldNs, $brFld);
        }
        if (!$browse && $orderby) {
            $sql =
                "SELECT to_hex(sq2.gunid)as gunid, m1.object, sq2.ftype, sq2.id\n".
                "FROM (\n$sql\n)sq2\n".
                join("\n", $orderJoinSql).
                "ORDER BY ".join(",", $orderBySql)."\n";
        }
        // echo "\n---\n$sql\n---\n";
        $cnt = $this->_getNumRows($sql);
        if (PEAR::isError($cnt)) {
        	return $cnt;
        }
        $res = $this->dbc->getAll($sql.$limitPart);
        if (PEAR::isError($res)) {
        	return $res;
        }
        if (!is_array($res)) {
        	$res = array();
        }
        $eres = array();
        // echo "\n---\n"; var_dump($res); echo"\n---\n";
        foreach ($res as $it) {
            if (!$browse) {
                $gunid = StoredFile::_normalizeGunid($it['gunid']);
                $titleA = $r = $this->gb->bsGetMetadataValue($it['id'], 'dc:title');
                if (PEAR::isError($r)) {
                	return $r;
                }
                $title = (isset($titleA[0]['value']) ? $titleA[0]['value'] : '');
                $creatorA = $r = $this->gb->bsGetMetadataValue($it['id'], 'dc:creator');
                if (PEAR::isError($r)) {
                	return $r;
                }
                $creator = (isset($creatorA[0]['value']) ? $creatorA[0]['value'] : '');
                $sourceA = $r = $this->gb->bsGetMetadataValue($it['id'], 'dc:source');
                if (PEAR::isError($r)) {
                	return $r;
                }
                $source = (isset($sourceA[0]['value']) ? $sourceA[0]['value'] : '');
                $lengthA = $r = $this->gb->bsGetMetadataValue($it['id'], 'dcterms:extent');
                if (PEAR::isError($r)) {
                	return $r;
                }
                $length = (isset($lengthA[0]['value']) ? $lengthA[0]['value'] : '');
                $eres[] = array(
                    'gunid' => $gunid,
                    'type' => $it['ftype'],
                    'title' => $title,
                    'creator' => $creator,
                    'length' => $length,
                    'source' => $source,
                );
            } else {
                $eres[] = $it['txt'];
            }
        }
        return array('results'=>$eres, 'cnt'=>$cnt);
    }


    /**
     * Return values of specified metadata category
     *
     * @param string $category
     * 		metadata category name, with or without namespace prefix (dc:title, author)
     * @param int $limit
     * 		limit for result arrays (0 means unlimited)
     * @param int $offset
     * 		starting point (0 means without offset)
     * @param array $criteria
     * @return array
     * 		hash, fields:
     *       results : array with found values
     *       cnt : integer - number of matching values
     */
    function browseCategory($category, $limit=0, $offset=0, $criteria=NULL)
    {
        //$category = strtolower($category);
        $r = XML_Util::splitQualifiedName($category);
        $catNs = $r['namespace'];
        $cat = $r['localPart'];
        if (is_array($criteria) && count($criteria) > 0) {
            return $this->_localGenSearch($criteria, $limit, $offset, $catNs, $cat);
        }
        $sqlCond = "m.predicate='$cat' AND m.objns='_L' AND m.predxml='T'";
        if (!is_null($catNs)) {
            $sqlCond = "m.predns = '{$catNs}' AND  $sqlCond";
        }
        $limitPart = ($limit != 0 ? " LIMIT $limit" : '' ).
            ($offset != 0 ? " OFFSET $offset" : '' );
        $sql =
            "SELECT DISTINCT m.object FROM {$this->mdataTable} m\n".
            "WHERE $sqlCond";
        // echo "\n---\n$sql\n---\n";
        $cnt = $this->_getNumRows($sql);
        if (PEAR::isError($cnt)) {
        	return $cnt;
        }
        $res = $this->dbc->getCol($sql.$limitPart);
        if (PEAR::isError($res)) {
        	return $res;
        }
        if (!is_array($res)) {
        	$res = array();
        }
        return array('results'=>$res, 'cnt'=>$cnt);
    }


    /**
     * Get number of rows in query result
     *
     * @param string $query
     * 		SQL query
     * @return int
     * 		Number of rows in query result
     */
    function _getNumRows($query)
    {
        $rh = $this->dbc->query($query);
        if (PEAR::isError($rh)) {
        	return $rh;
        }
        $cnt = $rh->numRows();
        if (PEAR::isError($cnt)) {
        	return $cnt;
        }
        $rh->free();
        return $cnt;
    }

} // class DataEngine

?>