<?php
$host = '127.0.0.1';  //the name of the mysql service inside the docker file.
$user = 'root';
$password = '';
$db2 = 'audit_trail';
$connn = new mysqli($host,$user,$password,$db2);


if($connn->connect_error){
  echo 'connection failed'. $connn->connect_error;
}
?>