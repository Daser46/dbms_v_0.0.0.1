<?php

$db_host ='localhost';
$user = 'root';
$pasword = '';
$db_name = 'fuel_db';

$db_conn = mysqli_connect($db_host,$user,$pasword,$db_name);

if(!$db_conn){
    die('database connection error');
}
?>