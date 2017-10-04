<?php
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];



echo"<br>";

$query="insert into login_pelanggan  values
('$username','$password')";
if(mysql_query($query)){
    echo"pendaftaran anda berjaya !";
    echo"-->";
    echo"<a href=\"login_pelanggan.php\">anda seorang yang bijak berfikir !</a>";}
else
    echo"<a href=\"signup.php\">pendaftaran anda gagal. Jangan kecewa.</a>";
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