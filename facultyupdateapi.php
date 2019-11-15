<?php

if(isset($_POST['faculty_name'])){




$fac_name=$_POST['faculty_name'];
$addrs=$_POST['adrs'];
$gender=$_POST['gndr'];
$pin=$_POST['pncde'];
$qualificatn=$_POST['qufictn'];
$dept=$_POST['qufictn'];

$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";


    $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="UPDATE `faculty-details` SET `facultyname`='$fac_name',`address`='$addrs',`gender`='$gender',`pincode`=$pin,`qualification`='$qualificatn',`department`='$dept' WHERE `facultyname`='$fac_name'";

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