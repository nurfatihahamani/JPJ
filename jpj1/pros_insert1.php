<?php
include('config.php');
$nama_penuh=$_POST['nama_penuh'];
$no_ic=$_POST['no_ic'];
$tempat_lahir=$_POST['tempat_lahir'];
$jantina=$_POST['jantina'];
$jenis_lesen=$_POST['jenis_lesen'];

echo "<br>";

$query="insert into pelanggan values
('$nama_penuh','$no_ic','$tempat_lahir','$jantina','$jenis_lesen')";

if (mysql_query($query)) {
	echo "pendaftaran berjaya";
	echo "-->";
	echo "<a href=\"data_pelanggan.php\">list</a>"; }
else
    echo "something went wrong";
	
?>
<html>
<style>
table,th,td{
border:1px solid black;
border-collapse:collapse;
}
body{
    background-color:#EBFFB8;
}
</style>
</html>