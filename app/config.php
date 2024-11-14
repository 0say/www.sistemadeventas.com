<?php

// Database configuration
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sistemadeventas');


// Site configuration to variable
$server = "mysql:dbname=".DB_NAME.";host=".DB_HOST;

//connect to the database
try {
    $pdo = new PDO($server, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
    echo "Conexión exitosa";

} catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}
