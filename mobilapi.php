<?php
 if(isset($_GET['manufacture']))
 {
 $manufacture=$_GET['manufacture'];
 $model=$_GET['model'];
 $price=$_GET['price'];
 $processor=$_GET['processor'];
 $ram=$_GET['ram'];
 $internal=$_GET['internal'];
 


 $Servername="localhost";
 $DbUsername="root";
 $DbPassword="";
 $DbName="myclass";

 $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

 $sql="INSERT INTO handsetdetails(manufacture, model, price, processor, ram, internal) values('$manufacture', '$model', $price, '$processor', $ram, $internal)";

 $result=$connection->query($sql);

 if($result===TRUE){

    $r["status"]="Data Inserted";
}
else{
    $r["status"]="Data Insertion Failed";
}

echo json_encode($r);

}

?>