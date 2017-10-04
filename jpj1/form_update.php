<?php

include ('config.php');

$no_ic=$_GET['no_ic'];

$query="SELECT * FROM pelanggan WHERE
no_ic='$no_ic'";

$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;

while ($i<$num){
	$nama_penuh=mysql_result($result,$i,"nama_penuh");
	
	$no_ic=mysql_result($result,$i,"no_ic");
	
	$tempat_lahir=mysql_result($result,$i,"tempat_lahir");
	
	$jantina=mysql_result($result,$i,"jantina");
	
	$jenis_lesen=mysql_result($result,$i,"jenis_lesen");
?>

<center>

<form action="pros_update.php" method="post">
<table width="386" border='1'>
<tr>

<th scope="col">Nama Penuh:</th>

<th scope="col"><div align="left">

<input type="text" name="ud_nama_penuh"
value="<?php echo $nama_penuh;?>" 
/></div></td>

</tr>

<tr>

<th scope="col">No ic:</th>

<td><input name="ud_no_ic" type="text"
value="<?php echo $no_ic;?>" 
/></td>

</tr>

<tr>

<th scope="row">Tempat Lahir:</th>

<td><input name="ud_tempat_lahir" type="text"
value="<?php echo $tempat_lahir;?>"
maxlenght="200"
/></td>

</tr>

<tr>

<th scope="row">Jantina:</th>

<td><input name="ud_jantina" type="text"
value="<?php echo $jantina;?>"
/></td>

</tr>

<tr>

<th scope="row">Jenis Lesen:</th>

<td><input name="ud_jenis_lesen" type="text"
value="<?php echo $jenis_lesen;?>"
/></td>

</tr>

</table>

<br>

<input name="Submit" type="Submit"
value="Kemaskini"/>

</br>

</form>

</center>

<?php
++$i;
}
?> 
<style>
body{
  background-color:#EBFFB8;
}
</style>
	
	