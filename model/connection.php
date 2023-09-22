<?php
 $connection = new mysqli("localhost","root","","cinemas");
 $connection->set_charset("utf8");

// use mysqli;

// define("HOST","localhost");
// define("DBNAME","cinemas");
// define("USER","root");
// define("PASSWORD","");
// define("ROOT_PATH",dirname(__FILE__));

// class Connection{
//     private static $connection;

//     private function __contructor(){

//     }
    
//     public static function getInstace(){
//         if(!isset(self::$conncetion)){
//             self::$connection = new mysqli(HOST,USER,PASSWORD);
//             if(self::$connection->connect_error){
//                 die("Conexao falhou".self::$connection->connect_error);
//             }
//             if(!self::$connection->select_db(DBNAME)){
//                 $commands = file_get_contents(ROOT_PATH."/cinemas.sql");
//                 self::$connection->multi_query($commands);
//             }
//             return self::connection;
//         }
//     }
?>
