<?php

$host = "localhost";
$db = "db_moklet";
$user = "root";
$pass = "";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect)
{
    echo "Koneksi ke database gagal : ".mysqli_connect_error();
}
?>
