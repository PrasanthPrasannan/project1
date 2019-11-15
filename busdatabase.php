<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title>Document</title>
<script>

$(document).ready(function(){

$("#submit").click(function(){

console.log("test");

var busnumber=$("#busnumber").val();
var busname=$("#busname").val();
var route=$("#route").val();
var drivername=$("#drivername").val();
var conductorname=$("#conductorname").val();



$.ajax({

type:'POST',
url:'busdatabaseapi.php',
data:{busnumber:busnumber,busname:busname,route:route,drivername:drivername,conductorname:conductorname},
success:function(response){
   console.log(response);
}

})

})

})


</script>

</head>
<body>
<div class="container border">
<div class="row">
<h3 style="text-align:center; width:100%";>BUS DATABASE</h3>
<div class="col col-md-12">
<form method="POST">
<table class="table">
<tr>
<td>
Bus Number
</td>
<td>
<input type="number" class="form-control" id="busnumber">
</td>
</tr>
<tr>
<td>
Bus Name
</td>
<td>
<input type="text" class="form-control" id="busname">
</td>
</tr>
<tr>
<td>
Route
</td>
<td>
<select id="route" class="form-control">
<option value="">Select Route</option>
<option value="TVM - KOLLAM">TVM - KOLLAM</option>
<option value="TVM - KOZHICODE">TVM - KOZHICODE</option>
<option value="TVM - VAYANAD">TVM - VAYANAD</option>
<option value="TVM - ALAPPUZHA">TVM - ALAPPUZHA</option>
<option value="TVM - PATHANAMTHITTA">TVM - PATHANAMTHITTA</option>
</select>
</td>
</tr>
<tr>
<td>
Driver Name
</td>
<td>
<input type="text" class="form-control" id="drivername">
</td>
</tr>
<tr>
<td>
Conductor Name
</td>
<td>
<input type="text" class="form-control" id="conductorname">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="button" class="btn btn-success" id="submit">SUBMIT</button>
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

if(isset($_POST['submit'])){

$busnumber=$_POST['busnumber'];
$busname=$_POST['busname'];
$route=$_POST['route'];
$drivername=$_POST['drivername'];
$conductorname=$_POST['conductorname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `bus`(`busnumber`, `busname`, `route`, `drivername`, `conductorname`) VALUES ($busnumber,'$busname','$route','$drivername','$conductorname')";

$result=$connection->query($sql);

if($result===TRUE){
    echo "<script> alert('Data Inserted') </script>";
}
else{
    echo "<script>alert('Data Insertion Failed')</script>";
}

}

?>