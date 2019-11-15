<?php

if(isset($_POST['pdtname'])){

$productname=$_POST['pdtname'];
$price=$_POST['price'];
$description=$_POST['destn'];
$dealername=$_POST['dealrname'];


$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";


$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="INSERT INTO `product`(`pdtname`, `price`, `destn`, `dealrname`) VALUES ('$productname',$price,'$description','$dealername')";

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
