<?php

if(isset($_GET['id'])){

$id=$_GET['id'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="DELETE FROM `student_details` WHERE `Id`=$id";

$r=array();

$result=$connection->query($sql);


if($result===TRUE){

    $r["Status"]="Data Deleted";


}
else{
    $r["Status"]="Data Deletion Failed";
}

echo json_encode($r);

}
?>