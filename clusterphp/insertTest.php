<?php
$con=mysql_connect("localhost","clear219","anstjdwo12!");
//mysqli_set_charset($con,"utf8");

/*if(mysqli_connect_errno($con))
{
  echo "Failed to connect to MYSQL:", mysqli_connect_error();
}*/
if(!$con)
{
  die('not connect:'.mysql_error());
}
mysql_select_db("clear219",$con);

mysql_query("set names utf8");

$user_id = $_POST['user_id'];
$user_name =$_POST['user_naem'];
$user_password = $_POST['user_password'];

$qry ="insert into user_signin(user_id, user_name, user_password)values('$user_id','$user_name','$user_password')";

if(!mysql_query($qry,$con))
{
die('Error:'.mysql_error());
}
echo"record added";
mysql_close($con);
?>
