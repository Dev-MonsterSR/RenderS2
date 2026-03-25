<?php

function conexion(){
    $host = "host=dpg-d71v6ovdiees73c23ol0-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_evpi";
    $user = "user=test_evpi_user";
    $password = "password=gL9QBEDzoZ1RQkhHPfLDMjMXsdbPUK3i";


    $connStr = "host=$host port=$port dbname=$dbname user=$user password=$password";

        $db = pg_connect($connStr);

        if (!$db) {
            die("Error de conexión: " . pg_last_error());
        }

        return $db;
    }


?>