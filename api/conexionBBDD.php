<?php

$Repit=false;
$host="postgres://neondb_owner:npg_sK5GNmXbpA3Z@ep-frosty-surf-a2msft3e-pooler.eu-central-1.aws.neon.tech/neondb?sslmode=require";
$user="neondb_owner";
$password="npg_sK5GNmXbpA3Z";

$link= mysqli_connect($host,$user,$password);
$tildes=$link->query("SET NAMES 'utf8'");
mysqli_select_db($link,'neondb');