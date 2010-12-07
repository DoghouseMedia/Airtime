<?php



/**
 * This class defines the structure of the 'cc_show' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.campcaster.map
 */
class CcShowTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'campcaster.map.CcShowTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('cc_show');
		$this->setPhpName('CcShow');
		$this->setClassname('CcShow');
		$this->setPackage('campcaster');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('cc_show_id_seq');
		// columns
		$this->addPrimaryKey('ID', 'DbId', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'DbName', 'VARCHAR', true, 255, '');
		$this->addColumn('FIRST_SHOW', 'DbFirstShow', 'DATE', true, null, null);
		$this->addColumn('LAST_SHOW', 'DbLastShow', 'DATE', false, null, null);
		$this->addColumn('START_TIME', 'DbStartTime', 'TIME', true, null, null);
		$this->addColumn('END_TIME', 'DbEndTime', 'TIME', true, null, null);
		$this->addColumn('REPEATS', 'DbRepeats', 'TINYINT', true, null, null);
		$this->addColumn('DAY', 'DbDay', 'TINYINT', true, null, null);
		$this->addColumn('DESCRIPTION', 'DbDescription', 'VARCHAR', false, 512, null);
		$this->addColumn('SHOW_ID', 'DbShowId', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // CcShowTableMap
