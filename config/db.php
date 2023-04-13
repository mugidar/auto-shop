<?php 

$dblocation = "127.0.0.1";
$dbname = "car-shop";
$dbuser = "root";
$dbpass= "mixaker228";

$db = mysqli_connect($dblocation, $dbuser, $dbpass);
mysqli_set_charset($db, 'utf8');

if(!$db) {
    echo "Bad request";
    exit();
}

if(!mysqli_select_db($db, $dbname)) {
    echo `Bad request to {$dbname}`;
    exit();
}