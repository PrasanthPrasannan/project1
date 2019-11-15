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

echo "<table class='table'> <tr><th>  Model  </th>  <th>  Price  </th> <th> Processor</th> <th>Ram</th><th>Internal </th></tr> ";
while($row=$result->fetch_assoc()){
    

 $model=$row['model'];
 $price=$row['price'];
 $processor=$row['processor'];
 $ram=$row['ram'];
 $internal=$row['internal'];

    echo " <tr><td>  $model  </td>  <td> $price  </td> <td>$processor  </td> <td> $ram </td> <td>$internal </td></tr> ";

}

echo "</table>";


 }
 else{
echo "Invalid Manufacture name";


 }


}

?>