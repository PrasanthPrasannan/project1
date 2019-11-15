<?php

include 'dbcon.php';

if(isset($_POST['name'])){


  $name=$_POST["name"];
  $rollno=$_POST["rollno"];
  $admno=$_POST["admno"];
  $college=$_POST["college"]; 
  
  


$sql="INSERT INTO `college`(`name`, `rollno`, `admno`, `college`) VALUES ('$name',$rollno,$admno,'$college')";

$result=$connection->query($sql);

 $r=array();

    if($result===TRUE){

          $r["Status"]="Data Inserted";
    }
    else{

        $r["Status"]="Data Insertion failed";

    }

echo json_encode($r);
}
else{

    echo "invalid";

}
  
?>

