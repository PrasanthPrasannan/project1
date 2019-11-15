<?php

if(isset($_GET['name'])){

$name=$_GET['name'];



$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="SELECT `Id`, `name`, `adno`, `college`, `sem`, `branch`, `dob` FROM `student_details` WHERE `name`='$name'";



$result=$connection->query($sql);



if($result->num_rows>0){
    
    $r=array();

   while($row=$result->fetch_assoc()){ 

$r["result"][]=$row;

}
echo json_encode($r);
   
}
else{

    echo "Inalid Name";
}



}
?>