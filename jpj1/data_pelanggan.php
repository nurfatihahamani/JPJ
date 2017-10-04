<!DOCTYPE html>
<html>
<head>
<p style="background-color:#B04A00;">
<meta charset="UTF-8">
<title>JABATAN PENGANGKUTAN JALAN</title>
<img src="jata3.png" alt="jata" style="width:100px;height:100px;"/>
<img src="logoJPJ.png" alt="jpj" style="width:100px;height:100px;"/>
JABATAN PENGANGKUTAN JALAN(JPJ)
<style>
table,th,td{
border:1px solid black;
border-collapse;
}
body{
    background-color:#EBFFB8;
}

</style>

<?php
include('config.php');
$sql="SELECT*from pelanggan ORDER BY nama_penuh";
$result=mysql_query($sql) or die (mysql_error());
?>
<center><table style="width:70%">
<p><strong><center>SENARAI NAMA PELANGGAN</strong></center>
<p>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#ff6f00"><strong>Nama Penuh</strong></td>
<td align="center" bgcolor="#ff6f00"><strong>Tempat Lahir</strong></td>
<td align="center" bgcolor="#ff6f00"><strong>Jantina</strong></td>
<td align="center" bgcolor="#ff6f00"><strong>Jenis Lesen</strong></td>



</tr></center>
<?php
while($row=mysql_fetch_array($result))
{
  echo"<tr>";
  echo"<td>".$row["nama_penuh"]."</td>";
  echo"<td>".$row["tempat_lahir"]."</td>";
  echo"<td>".$row["jantina"]."</td>";
  echo"<td>".$row["jenis_lesen"]."</td>";
  

}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</center>
<style>
.button {
    background-color: #663300;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: right;
    display: inline-block;
    font-size: 12px;
    margin: 2px 2px;
    cursor: pointer;
	float: center;
}
</style>
</head>
<body>
<a href="index.html" class="button">Daftar Keluar</a>

</body><p></style>
<p><br>


</body>
</html>
</table>
</body>
</head>
</html>
