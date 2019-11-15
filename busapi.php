<?php

$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";


$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="SELECT  `busname`, `route`, `drivername`, `conductorname` FROM `bus`";

$result=$connection->query($sql);

$r=array();
if($result->num_rows>0){

  
    while($row=$result->fetch_assoc()){
     
        $r[]=$row;
        

    }

    echo json_encode($r);
    
     }
     else{
    echo "Invalid Bus number";
    
     }

     ?>