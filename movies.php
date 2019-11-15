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
<h3 style="text-align: center;">Movie Details</h3>
<form method="GET">
<table class="table">
<tr>
<td>
Movie Name
</td>
<td>
<input type="text" class="form-control" name="moviename">
</td>
</tr>
<tr>
<td>
Producer
</td>
<td>
<input type="text"class="form-control" name="producer">
</td>
</tr>
<tr>
<td>
Actor
</td>
<td>
<input type="text" class="form-control" name="actor">
</td>
</tr>
<tr>
<td>
Year
</td>
<td>
<input type="number" class="form-control" name="year">
</td>
</tr>
<tr>
<td>
Actress
</td>
<td>
<input type="text" class="form-control" name="actress">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="submit" class="btn btn-success" name="success">SUBMIT</button>
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

if(isset($_POST['success']))
{
 $moviename=$_POST['moviename'];
 $producer=$_POST['producer'];
 $actor=$_POST['actor'];
 $year=$_POST['year'];
 $actress=$_POS['actress'];

 
$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";

 $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

 
 $sql="INSERT INTO movies(moviename, producer, actor, year, actress) values('$moviename', '$producer', '$actor', $year, '$actress')";

 $result= $connection->query($sql);

 if($result===TRUE){
     echo "<script> alert('Data Inserted')</script>";
 }
 else{
     echo "<script> alert('Data Insertion Failed') </script>";
 }
}
?>