<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container border">
<div class="row">
<div class="col col-md-12">
<h3 style="text-align:center";>Handset Search</h3>
<form method="GET">
<table class="table">
<tr>
<td>
Mobile manufacture
</td>
<td>
<input type="text" class="form-control" name="name">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="submit"class="btn btn-success" name="submit">SEARCH</button>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>


<?php
if(isset($_GET['submit'])){

$mobile_name=$_GET['name'];

$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);


$sql="SELECT `model`, `price`, `processor`, `ram`, `internal` FROM `handsetdetails` WHERE `manufacture`='$mobile_name'";

$result=$connection->query($sql);

 if($result->num_rows>0)
 {
echo "<form method='GET'><table class='table'>";
while($row=$result->fetch_assoc()){
    

 $model=$row['model'];
 $price=$row['price'];
 $processor=$row['processor'];
 $ram=$row['ram'];
 $internal=$row['internal'];

    echo "<tr><td>Model</td><td> <input type='text' class='form-control' name='model-name' value='$model'></td></tr>
          <tr><td>Price</td><td><input type='text' class='form-control' name='prices' value='$price'></td></tr>
          <tr><td>Processor</td><td><input type='text' class='form-control' name='processors' value='$processor'></td></tr>
          <tr><td>Ram</td><td><input type='text' class='form-control' name='rams' value='ram'></td></tr>
          <tr><td>Internal</td><td><input type='text' class='form-control' name='internals' value='$internal'></td>
          <tr><td></td><td><button type='submit' class='btn btn-success' name='submit-butn' value='$mobile_name'>SUBMIT</button></td></tr>
          </tr>";
}

echo "</table>";


 }
 else{
echo "Invalid Manufacture name";


 }

}
 if(isset($_GET['submit-butn'])){
     
     $manufacture=$_GET['submit-butn'];
     $models=$_GET['model-name'];
     $prices=$_GET['prices'];
     $processors=$_GET['processors'];
     $rams=$_GET['rams'];
     $internals=$_GET['internals'];


    $Servername="localhost";
    $DbUsername="root";
    $DbPassword="";
    $DbName="myclass";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="UPDATE `handsetdetails` SET `model`=$models,`price`=$prices,`processor`='$processors',`ram`=$rams,`internal`=$internals WHERE `manufacture`='$manufacture'";

$result=$connection->query($sql);

if($result===TRUE){

   echo "<script> alert('Data inserted')</script>";
}
else{
    echo "<script>alert('Data Insersion Failed')</script>";
}
}
?>