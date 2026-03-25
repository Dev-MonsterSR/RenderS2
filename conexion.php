<?php

function conexion(){
    $host = "host=dpg-d71v6ovdiees73c23ol0-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_evpi";
    $username = "user=test_evpi_user";
    $password = "password=gL9QBEDzoZ1RQkhHPfLDMjMXsdbPUK3i";


    $db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");
    if (!$db) {
        echo "Error: No se pudo conectar a la base de datos.";
        exit;
    }
    return $db;
}


?>