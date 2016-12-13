<?php

$dbo = new Cdblayer;
$dbo->db_connect($globalvar_db_server,$globalvar_db_username,$globalvar_db_password) or die("error connecting to db");
$dbo->db_selectdb($globalvar_db_dbname);


?>
