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
<!-- <h3 style="text-align:center width:100%";>Registration</h3> -->
<div class="col col-md-12">
<form method="GET">
<table class="table">
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
College
</td>
<td>
<input type="text"class="form-control" name="college">
</td>
</tr>
<tr>
<td>
Ad no
</td>
<td>
<input type="number" class="form-control" name="adno">
</td>
</tr>
<tr>
<td>
Roll no
</td>
<td>
<input type="number" class="form-control" name="rollno">
</td>
</tr>
<tr>
<td>
Mobile
</td>
<td>
<input type="number" class="form-control" name="mobile">
</td>
</tr>
<tr>
<td>
E-mail
</td>
<td>
<input type="text" class="form-control" name="email">
</td>
</tr>
<tr>
<td>
User name
</td>
<td>
<input type="text"class="form-control" name="username">
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" class="form-control" name="password">
</td>
</tr>
<tr>
<td>
</td>
<td>
<button type="submit" class="btn btn-success" name="submit">Register</button>
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

$name=$_GET['name'];
$college=$_GET['college'];
$adno=$_GET['adno'];
$rollno=$_GET['rollno'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['password'];


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `students`(`name`, `college`, `admno`, `rollno`, `mobile`, `email`, `username`, `password`) VALUES ('$name','$college',$adno,$rollno,$mobile,'$email','$username',$password)";

$result=$connection->query($sql);

if($result===TRUE){

    echo "<script> alert('Data Inserted')</script>";

}
else{

    echo "<script> alert('Data Insertion Failed') </script>";
    
}

}


?>