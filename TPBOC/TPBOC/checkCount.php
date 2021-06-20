<?php

/////////////////////////////////////
$hostname3="127.0.0.1";
$username3="root";
$password3="";
$db3 = "audit_trail";
$dbh = new PDO("mysql:host=$hostname3;dbname=$db3", $username3, $password3);
foreach($dbh->query('SELECT action,COUNT(*) FROM data GROUP BY action ') as $row) {
/* echo "<tr>";
echo "<td>" . $row['action'] . "</td>";
echo "<td>" . $row['COUNT(*)'] . "</td>";
echo "</tr>";
 */

$action=$row['action'];
$count=$row['COUNT(*)'];

/* $Insertquery= $connn->prepare("INSERT INTO action_count VALUES (?,?)"); //prepared statement
$Insertquery->bind_param("si", $action,$count); //bind the parameters
$query->execute(); */




$host = '127.0.0.1';  //the name of the mysql service inside the docker file.
$user = 'root';
$password = '';
$db2 = 'audit_trail';
$connn1 = new mysqli($host,$user,$password,$db2);


if($connn1->connect_error){
  echo 'connection failed'. $connn1->connect_error;
}


/* $Insertquery = "insert into action_count(action, occurences) values('$action',$count)";
mysqli_query($connn,$Insertquery); */

$queryUpdate = "UPDATE action_count SET occurences=$count WHERE action='$action'";
if (mysqli_query($connn1, $queryUpdate)) {
    // echo "Record updated successfully";
}else {
     echo "Error updating record:  PS EPIC FAIL" . mysqli_error($conn);
}



}

?>

