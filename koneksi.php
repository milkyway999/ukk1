<?php
$servername = 'localhost';
$dbname = 'pengaduan_masyarakat';
$username = 'root';
$password = '';

$koneksi = new PDO ("mysql:host=$servername; dbname=$dbname",$username ,$password);

echo var_dump($koneksi);
?>