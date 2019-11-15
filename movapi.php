<?php

include 'dbcon.php';

if(isset($_POST['moviename'])){

$moviename=$_POST['moviename'];
$actor=$_POST['actor'];
$actress=$_POST['actress'];
$director=$_POST['director'];



$sql="INSERT INTO `movie`(`moviename`, `actor`, `actress`, `director`) VALUES ('$moviename','$actor','$actress','$director')";

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

    echo "Invalid Data";
}



?>
