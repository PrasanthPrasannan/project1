
<?php
if(isset($_GET['empcode'])){

    $employeecode=$_GET['empcode'];
    $employeename=$_GET['name'];
    $designation=$_GET['designation'];
    $salary=$_GET['salary'];
    $place=$_GET['place'];



$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `employee_details`(`empcode`, `name`, `designation`, `salary`, `place`) VALUES ($employeecode,'$employeename','$designation',$salary,'$place')";

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