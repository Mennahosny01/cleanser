<?php
require_once('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$img=$_POST['img'];
$query="INSERT INTO login (name,email,password,img) VALUE (?,?,?,?)";
getdata($query,[$name,$email,$password,$img]);
header("location:index.php");
