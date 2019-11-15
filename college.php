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

$(document).ready(function()
{

$("#submit").click(function()
{
console.log("test");

var name=$("#name").val();
var rollno=$("#rollno").val();
var admno=$("#admno").val();
var college=$("#college").val();

$.ajax({

type:'POST',
url:'collegeapi.php',
data:{name:name,rollno:rollno,admno:admno,college:college},
success:function(response){
console.log(response);
}

})






}

)



})


// function read(){

// console.log("Test");

// var name=document.getElementById("name").value;
// var rollno=document.getElementById("rollno").value;
// var admno=document.getElementById("admno").value;
// var college=document.getElementById("college").value;
// console.log(name);
// console.log(rollno);
// console.log(admno);
// console.log(college);

// }

</script>


</head>
<body>
    <div class="container border">
    <div class="row">
<div class="col-md-12">
<h1 style="font-size:15px;text-align:center;">COLLEGE</h1>
<form method="POST">
<table class="table">

<tr>
<td>
Name
</td>
<td>
<input type="text" class="form-control" id="name">
</td>
</tr>

<tr>
<td>
Rollno
</td>
<td>
<input type="text" class="form-control" type="number" id="rollno">
</td>
</tr>

<tr>
<td>
admno
</td>
<td>
<input type="text" class="form-control" type="number" id="admno">
</td>
</tr>

<tr>
<td>
college
</td>
<td>
<input type="text" class="form-control" id="college">
</td>
</tr>

<tr>
<td></td>
<td>
<button type="button" class="btn btn-success" id="submit">SUBMIT</button>
</td>
</tr>


</table>
</div>
</div>
</div>
</div>
</body>
</html>


<?php

if(isset($_POST['submit'])){


  $name=$_POST["name"];
  $rollno=$_POST["rollno"];
  $admno=$_POST["admno"];
  $college=$_POST["college"]; 
  
  
$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `college`(`name`, `rollno`, `admno`, `college`) VALUES ('$name',$rollno,$admno,'$college')";

$result=$connection->query($sql);

    if($result===TRUE){
        echo "<script> alert('Data Inserted')</script>";
    }
    else{
        echo "<script> alert('Data Insertion Failed') </script>";
    }

}
  
?>

