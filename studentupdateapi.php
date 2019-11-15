<?php

if(isset($_GET['adno'])){

$id=$_GET['id'];    
$name=$_GET['name'];
$adno=$_GET['adno'];
$college=$_GET['college'];
$sem=$_GET['sem'];
$branch=$_GET['branch'];
$dob=$_GET['dob'];



$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="UPDATE `student_details` SET `name`='$name',`adno`=$adno,`college`='$college',`sem`=$sem,`branch`='$branch',`dob`='$dob' WHERE `id`=$id";

$r=array();

$result=$connection->query($sql);


if($result===TRUE){

    $r["Status"]="Data Updated";


}
else{
    $r["Status"]="Data Updation Failed";
}

echo json_encode($r);

}
?>