<?php

include 'dbcon.php';

if(isset($_POST['empcode'])){

$empcode=$_POST['empcode'];

$sql="DELETE FROM `employee_details` WHERE `empcode`='$empcode'";

$result=$connection->query($sql);

$r=array();

if($result===TRUE){

    $r["Result"]="Data Deleted";


}
else{


    $r["Result"]="Data Deletion Failed";
}

echo json_encode($r);
    
}
else{

    echo "Invalid Data";
}

?>