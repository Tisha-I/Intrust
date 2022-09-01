<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  include "connection.php";
  $select=mysql_query("update user set password='$pass' where email='$email'");
}
?>