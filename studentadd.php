<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container border">
<div class="row">
<div class="col-md-12">
<h1 style="text-align:center; font-size:28px;">STUDENT ADD</h1>
<form method="POST">
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
Roll Number
</td>
<td>
<input type="number" class="form-control" name="rollno">
</td>
</tr>
<tr>
<td>
Admission Number
</td>
<td>
<input type="number" class="form-control" name="admno">
</td>
</tr>
<tr>
<td>
College
</td>
<td>
<input type="text" class="form-control" name="college">
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

include 'dbcon.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$rollno=$_POST['rollno'];
$admno=$_POST['admno'];
$college=$_POST['college'];


$sql="INSERT INTO `student_details`(`name`, `rollno`, `admno`, `college`) VALUES ('$name',$rollno,$admno,'$college')";

$result=$connection->query($sql);

if($result===TRUE)
{

    echo "<script>alert('Data Inserted')</script>";

}
else{
    echo "<script>alert('Data Insertion Failed')</script>";

}
}

?>