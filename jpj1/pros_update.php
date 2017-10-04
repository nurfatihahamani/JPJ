<?php

include ('config.php');
$ud_nama_penuh=$_POST['ud_nama_penuh'];
$ud_no_ic=$_POST['ud_no_ic'];
$ud_tempat_lahir=$_POST['ud_tempat_lahir'];
$ud_jantina=$_POST['ud_jantina'];
$ud_jenis_lesen=$_POST['ud_jenis_lesen'];

$query="UPDATE pelanggan SET 
nama_penuh='$ud_nama_penuh',tempat_lahir='$ud_tempat_lahir',jantina='$ud_jantina',

jenis_lesen='$ud_jenis_lesen' WHERE no_ic='$ud_no_ic'";

mysql_query($query);
header('Location:datapelanggan.php');

mysql_close();

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