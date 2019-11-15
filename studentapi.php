<?php

$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="SELECT `Id`, `name`, `adno`, `college`, `sem`, `branch`, `dob` FROM `student_details`";

$r=array();

$result=$connection->query($sql);


if($result->num_rows>0){

    while($row=$result->fetch_assoc()){

$r[]=$row;


}

echo json_encode($r);

}

else{

    echo "Invalid details";
}


?>