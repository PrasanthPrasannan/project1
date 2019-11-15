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
<h3 style="text-align:center";>Student Details Search</h3>
<form method="GET">
<table class="table">
<tr>
<td>
Roll Number
</td>
<td>
<input type="text" class="form-control" name="rollno">
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

$rollno=$_GET['rollno'];


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";


$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="SELECT `name`, `college`, `admno`, `mobile`, `email`, `username`, `password` FROM `students` WHERE rollno=$rollno";

$result=$connection->query($sql);

if($result->num_rows>0)
 {

echo "<table class='table'> <tr><th>  ModelNAME  </th>  <th>  College  </th> <th> Admission Number </th> <th>Mobile</th><th>Username </th> <th>Password  </th></tr> ";
while($row=$result->fetch_assoc()){
    

 $name=$row['name'];
 $college=$row['college'];
 $adno=$row['admno'];
 $mobile=$row['mobile'];
 $username=$row['username'];
 $password=$row['password'];
 

    echo " <tr><td>  <input type='text' value='$name' />  </td>  <td> $college  </td> <td>$adno  </td> <td> $mobile</td> <td>$username </td> <td>$password </td></tr> ";

}

echo "</table>";


 }
 else{
echo "Invalid Roll number";


 }

}


?>