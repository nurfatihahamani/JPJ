<?php
session_start();
session_destroy();
echo "You're log out !";
echo "<a href='index.html'> Click Here to return </a>";

?>
<html>
<style>
table,th,td{
border:1px solid black;
border-collapse:collapse;
}
body{
    background-color: #EBFFB8;
}
</style>
</html>
