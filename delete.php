<?php
require_once("db.php");
$id=$_GET['id'];
$query="delete from login where id=?";
getdata($query,[$id]);
header("location:index.php");
