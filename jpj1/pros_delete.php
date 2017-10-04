<?php

include ('config.php');

$no_ic=$_GET['no_ic'];

$query="delete from pelanggan where 
no_ic='$no_ic'";

$result=mysql_query($query);

echo $no_ic;

if ($result==TRUE) echo "anda berjaya <a 
href=\"datapelanggan.php\">senarai</a>";

if ($result==FALSE) echo "anda gagal <a 
href=\"datapelanggan.php\">senarai<?a>";

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