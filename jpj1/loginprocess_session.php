<html>
<head>
<title>Login</title>
<style>
body{
  background-color:#EBFFB8;
}
</style>
</head>


<body>
<?php

session_start();
$username =$_POST['username'];
$password =$_POST['password'];

if ($username && $password)

{

$server='localhost:81';
$userid2='root';
$password2='098765';
$dbname='jpjdb';

$conn=mysql_connect("$server", "$userid2",
"$password2");

mysql_select_db("$dbname", $conn) or 
die(mysql_error());

$query= mysql_query("select *from 
login_pelanggan where username = '$username'");

$numrows = mysql_num_rows($query);
if ($numrows !=0)

{

while ($row = mysql_fetch_assoc($query))

{

    $dbusername = $row["username"];
	
    $dbpassword = $row["password"];

}


if ($username==$dbusername&&$password==$dbpassword)

{

$_SESSION['username']=$username;
header( 'Location:form.php');

} else

       {echo " Incorrect Password!! <a href='login.php'> Click here to login </a>";}

       }  // if  2

      
      else

die ("That user doesn't exist");


       } // if 1
 

      else
      
      {

   echo "Please enter userid and password!! <a 
   href='login.php'> Click here to login</a>";

}

?>

</body>
</html>