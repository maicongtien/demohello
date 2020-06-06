<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'qanfsffkqsrvtc');
define('DB_PASSWORD', 'cf122c2872b87c3254a0f2ef7693e6185364570f51797bc3717a32b1c225cf27');
define('DB_NAME', 'dfk84aibtbqaeq');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
