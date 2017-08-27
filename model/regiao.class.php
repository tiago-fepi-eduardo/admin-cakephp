<?php

class regiao extends db {

    function __construct() {
        db::db(MYSQL_DB_USER, MYSQL_DB_PASSWORD, MYSQL_DB_NAME, MYSQL_DB_HOST);
    }

    function lista_regiao() {
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');		
        
		$query = "SELECT * 
				 FROM regiaos";
		
		return db::get_results($query);
    }
}

?>