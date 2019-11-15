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
<h3 style="text-align:center; width:100%";>EMPLOYEE DETAILS</h3>
<div class="col col-md-12">
<form method="POST">
<table class="table">
<tr>
<td>
Employee Code
</td>
<td>
<input type="text" class="form-control" name="empcode">
</td>
</tr>
<tr>
<td>
Name
</td>
<td>
<input type="text" class="form-control" name="name">
</td>
</tr>
<tr>
<td>
Designation
</td>
<td>
<input type="text" class="form-control" name="designation">
</td>
</tr>
<tr>
<td>
Salary
</td>
<td>
<input type="text" class="form-control" name="salary">
</td>
</tr>
<tr>
<td>
Place
</td>
<td>
<input type="text" class="form-control" name="place">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
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

    $employeecode=$_POST['empcode'];
    $employeename=$_POST['name'];
    $designation=$_POST['designation'];
    $salary=$_POST['salary'];
    $place=$_POST['place'];



$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `employee_details`(`empcode`, `name`, `designation`, `salary`, `place`) VALUES ($employeecode,'$employeename','$designation',$salary,'$place')";

$result=$connection->query($sql);

if($result===TRUE){
    echo "<script> alert('Data Inserted')</script>";
}
else{
    echo "<script> alert('Data Insertion Failed') </script>";
}

}
?>