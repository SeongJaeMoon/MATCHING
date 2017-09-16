<?php
$con =mysql_connect("localhost","clear219","anstjdwo12!");
if(!$con)
{
  die('not connect:'.mysql_error());
}

mysql_select_db("clear219",$con);

/*$hash=password_hash($user_password, PASSWORD_DEFAULT);
$user_password = $hash;*/
$user_id = $POST['user_id'];
$user_name = $POST['user_name'];
$user_password = $POST['user_password'];

$qry = "INSERT into user_signin(user_id, user_name, user_password)
        values('$user_id', '$user_name', md5('$user_password'))";
if(!mysql_query($qry, $con));
{
  die('Error:'.mysql_error());
}
  echo "record added";
  mysql_close($con);
?>

<?php
$con = mysql_connect("localhost","clear219","anstjdwo12!");
if(!con)
{
  die('not connect:'.mysql_error());
}
mysql_select_db('clear219', $con);
$user_id = $POST['user_id'];
$user_password['user_password'];
$query_search = "SELECT * from user_signin where user_id='".$user_id"'AND user_password = '".$user_password"'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows=mysql_num_rows($query_exec);

if ($rows == 0) {
  echo "Not exists User"
}
else {
  echo "User Found";
}
?>
