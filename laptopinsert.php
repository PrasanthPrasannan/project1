<?php

if(isset($_POST['model'])){

$model=$_POST['model'];
$processor=$_POST['processor'];
$year=$_POST['year'];
$ram=$_POST['ram'];
$price=$_POST['price'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="laptop";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `laptop_details`(`model`, `processor`, `year`, `ram`, `price`) VALUES ('$model','$processor','$year',$ram,$price)";

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