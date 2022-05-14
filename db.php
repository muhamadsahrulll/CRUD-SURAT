<?php
session_start();

$conn_str = "host=tiny.db.elephantsql.com " .
    "port=5432 " .
    "user=aeamatkq " .
    "dbname=aeamatkq " .
    "password=K_GPXJs4ZubjKPREMmqYacX20gypg5EI";
$conn = pg_connect($conn_str);

?>
