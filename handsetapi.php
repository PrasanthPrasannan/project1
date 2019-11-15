<?php


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);


$sql="SELECT `model`, `price`, `processor`, `ram`, `internal` FROM `handsetdetails`";

$result=$connection->query($sql);

$r=array();

 if($result->num_rows>0)
 {

while($row=$result->fetch_assoc()){

    $r[]=$row;
    
}

echo json_encode($r);

 }
 else{
echo "Invalid Manufacture name";


 }

?>