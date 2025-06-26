<?php
define('dsn','mysql:host=localhost;dbname=form');
define('user','root');
define('password','');

$db=new PDO(dsn,user,password);
$queruy=('select * from login');
function getdata( string $query,$params=[]){
global $db;
$patch=$db->prepare($query);
$patch->execute($params);
return $patch->fetchAll(PDO::FETCH_ASSOC);

}

function close(){
    global $db;
    global $patch;
    $db=null;
    $patch=null;

}
