<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


   <script>
    
    function read(){

    var name=document.getElementById("").value;

    }
    
    
   </script>


    <title>Document</title>
</head>
<body>
    <div class="container border">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
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
    Roll No
    </td>
    <td>
    <input type="text" class="form-control" name="rollno">
    </td>
    </tr>  
    <tr>
    <td>
    Ad no
    </td>
    <td>
    <input type="text" class="form-control" name="adno">
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
    <button type="button" class="btn btn-success" name="mybutton" onclick="read();">SUBMIT</button>
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

if(isset($_GET['mybutton']))

{

$name=$_GET['name'];
$rollnumber=$_GET['rollno'];
$admnno=$_GET['adno'];
$college=$_GET['college'];

echo "<table class='table'> ";
echo "<tr> <td> Name :  </td>   <td>  $name  </td>   </tr>";
echo "<tr> <td> Roll no :  </td>   <td>  $rollnumber  </td>   </tr>";
echo "<tr> <td> Admission number :  </td>   <td>  $admnno  </td>   </tr>";
echo "<tr> <td> College :  </td>   <td>  $college  </td>   </tr>";


echo "</table>";


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="myclass";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `students`( `name`, `rollno`, `admno`, `colg`) VALUES('$name',$rollnumber,$admnno,'$college')";

 $result=  $connection->query($sql);

 if($result===TRUE){
     echo "<script> alert('Data Inserted')</script>";
 }
 else{
     echo "<script> alert('Data Insertion Failed') </script>";
 }
}

?>