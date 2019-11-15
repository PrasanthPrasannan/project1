<?php

if(isset($_POST['empcode'])){


$empcode=$_POST['empcode'];

$empname=$_POST['emp_name'];
$empdesignation=$_POST['desg'];
$empsalary=$_POST['sal'];
$empplace=$_POST['plc'];

$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";


    $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);


    $sql="UPDATE `employee_details` SET `name` ='$empname', `designation`='$empdesignation' ,`salary`='$empsalary',`place`='$empplace' WHERE `empcode`=$empcode ";

$result=$connection->query($sql);

$r=array();

if($result===TRUE){

    $r["Status"]="Data Updated";
}
else{
    
$r["Status"]="Data Updation Failed";

}
echo json_encode($r);


}



else{

    echo "Invalid Data";

}

?>