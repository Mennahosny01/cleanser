<?php
require_once('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$img=$_POST['img'];
$query="update login set name=?,email=?,password=?,img=?wehere id=?  ";
getdata($query,[$name,$email,$password,$img,$_POST['id']]);
header("location:index.php");

?>

