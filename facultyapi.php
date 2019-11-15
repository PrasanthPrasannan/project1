<?php
if(isset($_POST['facultyname'])){

$facultyname=$_POST['facultyname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$pincode=$_POST['pincode'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `faculty-details`(`facultyname`, `address`, `gender`, `pincode`, `qualification`, `department`) VALUES ('$facultyname','$address','$gender',$pincode,'$qualification','$department')";

$result=$connection->query($sql);

$r=array();
if($result===TRUE){
    $r["status"]="Data Inserted";
}
else{
    $r["status"]="Data Insertion Failed";
}

echo json_encode($r);

}
else{

echo "Inavalid Data";

}
?>