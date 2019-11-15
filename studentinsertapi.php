<?php

if(isset($_GET['name'])){

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

$sql="INSERT INTO `student_details`(`name`, `adno`, `college`, `sem`, `branch`, `dob`) VALUES ('$name',$adno,'$college',$sem,'$branch',$dob)";

$r=array();

$result=$connection->query($sql);


if($result===TRUE){

    $r["Status"]="Data Inserted";


}
else{
    $r["Status"]="Data Insersion Failed";
}

echo json_encode($r);

}
?>