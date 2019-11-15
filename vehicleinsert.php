<?php

if(isset($_POST['vechicle_no'])){

$vechicle_no=$_POST['vechicle_no'];
$year=$_GET['year'];
$owner=$_POST['owner'];
$reg_date=$_POST['reg_date'];
$tax_amount=$_POST['tax_amout'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="vehicle";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `vehicle_details`(`vechicle_no`, `year`, `owner`, `reg_date`, `tax_amout`) VALUES ('$vechicle_no',$year,'$owner','$reg_date','$tax_amount')";

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