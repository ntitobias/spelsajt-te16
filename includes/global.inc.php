<?php
/**
 * Funktion för att ansluta till en databas
 * 
 * Funktione förutsätter att några konstanter redan har satts:
 * DB_NAME
 * DB_USERNAME
 * DB_PASSWORD
 * TZ
 * 
 * @return PDO Databaskopplingen som ett PDO-objekt.
 */

 function get_dbh()
 {
    //Uppkopplingen återanvänds
    static $dbh;

    if(is_null($dbh)){
        //Kontroll av parametrar
        $dsn = "mysql:host=localhost;dbname=" . DB_NAME . 
        ";charset=utf8";
        
 


    }
    return $dbh;
 }