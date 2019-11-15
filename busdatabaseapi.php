<?php

if(isset($_POST['busnumber'])){

$busnumber=$_POST['busnumber'];
$busname=$_POST['busname'];
$route=$_POST['route'];
$drivername=$_POST['drivername'];
$conductorname=$_POST['conductorname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `bus`(`busnumber`, `busname`, `route`, `drivername`, `conductorname`) VALUES ($busnumber,'$busname','$route','$drivername','$conductorname')";

$result=$connection->query($sql);

$r=array();

if($result===TRUE){
    
    $r["Status"]="Data Inserted";
}
else{
    $r["Status"]="Data Insertion Failed";
}

echo json_encode($r);

}
else{
echo "Invalid data";

}

?>
