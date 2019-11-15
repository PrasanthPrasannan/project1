<?php

if(isset($_GET['busnumber'])){

$busnumber=$_GET['busnumber'];
$busname=$_GET['busname'];
$route=$_GET['route'];
$drivername=$_GET['drivername'];
$conductorname=$_GET['conductorname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `bus`(`busnumber`, `busname`, `route`, `drivername`, `conductorname`) VALUES ($busnumber,'$busname','$route','$drivername','$conductorname')";

$result=$connection->query($sql);

if($result===TRUE){
    $r["status"]="Data Inserted";
}
else{
    $r["status"]="Data Insertion Failed";
}
echo json_encode($r);
}

?>