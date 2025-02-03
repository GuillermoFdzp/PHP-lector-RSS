<?php

$Repit=false;
$conn_string="postgres://neondb_owner:npg_sK5GNmXbpA3Z@ep-frosty-surf-a2msft3e-pooler.eu-central-1.aws.neon.tech/neondb?sslmode=require";
$link = pg_connect($conn_string);

if (!$link) {
    die("Error in connection: " . pg_last_error());
}

pg_set_client_encoding($link, "UTF8");
echo "Conectado a la base de datos";