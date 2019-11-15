<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container border">
<form method="GET">
<table class="table">
<tr>
<td>
User Name
</td>

<td>
<input type="text" class="form-control" name="username">
</td>

</tr>
<tr>
<td>
Password
</td>
<td>
<input type="number" class="form-control" name="password">
</td>
</tr>
<tr>
<td>
</td>

<td>
<button type="submit" class="btn btn-success" name="login">LOGIN</button>
</td>

</tr>


</table>


</form>
</div>

</body>
</html>

<?php
if(isset($_GET['login']))
{
$username=$_GET['username'];
$password=$_GET['password'];


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="demo";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO userlogin('Username','Password') values('$username','$password')";

$result=  $connection->query($sql);

if($username=="admin" && $password=="12345")
{
    
 
    header('Location:welcome.php');
    
}
else{
    echo "<script> alert('Invalid Username or Password') </script> ";
    
}



}


?>