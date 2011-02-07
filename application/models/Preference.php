<?php

class Application_Model_Preference
{

    public static function SetValue($key, $value){
        global $CC_CONFIG, $CC_DBC;

        $auth = Zend_Auth::getInstance();
        $id = $auth->getIdentity()->id;
        
        //Check if key already exists
        $sql = "SELECT COUNT(*) FROM cc_pref"
        ." WHERE keystr = '$key'";
        $result = $CC_DBC->GetOne($sql);
        
        if ($result == 1){
            $sql = "UPDATE cc_pref"
            ." SET subjid = $id, valstr = '$value'"
            ." WHERE keystr = '$key'";            
        } else {
            $sql = "INSERT INTO cc_pref (subjid, keystr, valstr)"
            ." VALUES ($id, '$key', '$value')";
        }
        return $CC_DBC->query($sql);
    }
    
    public static function GetValue($key){
        global $CC_CONFIG, $CC_DBC;
        //Check if key already exists
        $sql = "SELECT COUNT(*) FROM cc_pref"
        ." WHERE keystr = '$key'";
        $result = $CC_DBC->GetOne($sql);
        
        if ($result == 0)
            return "";
        else {
            $sql = "SELECT valstr FROM cc_pref"
            ." WHERE keystr = '$key'";
            $result = $CC_DBC->GetOne($sql);
            return $result;
        }
        
    }
    
    public static function GetHeadTitle(){
        /* Caches the title name as a session variable so we dont access
         * the database on every page load. */
        $defaultNamespace = new Zend_Session_Namespace('title_name');
        if (isset($defaultNamespace->title)) {
            $title = $defaultNamespace->title;
        } else {
            $title = Application_Model_Preference::GetValue("station_name");
            $defaultNamespace->title = $title;
        }
        if (strlen($title) > 0)
            $title .= " - ";
        
        return $title."Airtime";
    }
    
    public static function SetHeadTitle($title, $view){
        Application_Model_Preference::SetValue("station_name", $title); 
        $defaultNamespace = new Zend_Session_Namespace('title_name'); 
        $defaultNamespace->title = $title;
 
        //set session variable to new station name so that html title is updated.
        //should probably do this in a view helper to keep this controller as minimal as possible.
        $view->headTitle()->exchangeArray(array()); //clear headTitle ArrayObject
        $view->headTitle(Application_Model_Preference::GetHeadTitle());
    }

    public static function SetShowsPopulatedUntil($timestamp) { 
        Application_Model_Preference::SetValue("shows_populated_until", $timestamp); 
    }

    public static function GetShowsPopulatedUntil() {
        return Application_Model_Preference::GetValue("shows_populated_until");
    }

}

