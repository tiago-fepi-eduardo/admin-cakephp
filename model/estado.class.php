<?php

class estado extends db {

    function __construct() {
        db::db(MYSQL_DB_USER, MYSQL_DB_PASSWORD, MYSQL_DB_NAME, MYSQL_DB_HOST);
    }

    function lista_estado_regiao($regiao_id) {
				mysql_query("SET NAMES 'utf8'");
				mysql_query('SET character_set_connection=utf8');
				mysql_query('SET character_set_client=utf8');
				mysql_query('SET character_set_results=utf8');		
						
				$query = "SELECT nome
						  FROM  `estados`
						  WHERE id_regiao = ".$regiao_id;
				
				return db::get_results($query);
    }

    function lista_estado() {
				mysql_query("SET NAMES 'utf8'");
				mysql_query('SET character_set_connection=utf8');
				mysql_query('SET character_set_client=utf8');
				mysql_query('SET character_set_results=utf8');		
						
				$query = "SELECT * 
						  FROM estados";
				
				return db::get_results($query);
    }

	function lista_estado_sigla($estado_sigla) {
		mysql_query("SET NAMES 'utf8'");
		mysql_query('SET character_set_connection=utf8');
		mysql_query('SET character_set_client=utf8');
		mysql_query('SET character_set_results=utf8');		

        $query = "SELECT *
				  FROM estados			  
				  WHERE sigla = '".$sigla."'";
		
		return db::get_results($query);
    }
}

?>