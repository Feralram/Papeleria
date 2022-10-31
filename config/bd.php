<?php

class Database {

    public static function connect(){
        $server = 'localhost';
        //SET lc_time_names = 'es_ES';
        $db = new mysqli($server, 'root', '', 'papeleria'); 
		$db->query("SET NAMES 'utf8'");
                $db->query("SET lc_time_names = 'es_ES';");
		return $db;

    }
}

?>