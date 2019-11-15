<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<form method="GET" >
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
Address
</td>
<td>
<textarea cols="21" rows="5" class="form-control" name="address"></textarea>
</td>
</tr>
<tr>
<td>
Gender
</td>
<td>

<input type="radio" name="gender" value="male">
male
<input type="radio"  name="gender" value="female">
female
</td>
</tr>
<tr>
<td>
District
</td>
<td>

<select name="district" id="" class="form-control">

<option value="Trivandrum"> Trivandrum</option>
<option value="Kollam">Kollam</option>
<option value="Alappuzha">Alappuzha</option>
<option value="pathanamthitta">pathanamthitta</option>
<option value="kottayam">kottayam</option>
<option value="Idukki">Idukki</option>
</select>

</td>
</tr>
<tr>
<td>
Mobile
</td>
<td>
<input type="tel" name="mobile"  class="form-control">
</td>
</tr>
<tr>
<td>
Username
</td>
<td>
<input type="text" name="username"  class="form-control">
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" name="password" class="form-control">
</td>
</tr>
<tr>
<td>
Confirm Password
</td>
<td>
<input type="password" class="form-control" name="conform_password">
</td>
</tr>
<tr>
<td>
<button type="reset" class="btn btn-primary">Reset</button>
</td>
<td>
<button type="submit" class="btn btn-success" name="regbtn">Register</button>
</td>
</tr>
</table>

</form>


</body>
</html>
<?php

if(isset($_GET['regbtn']))
{
$name=$_GET['name'];
$address=$_GET['address'];
$male=$_GET['gender'];
$district=$_GET['district'];
$mobile=$_GET['mobile'];
$username=$_GET['username'];
$password=$_GET['password'];
$conformpassword=$_GET['conform_password'];

echo $name;
echo "<br>";
echo $address;
echo "<br>";
echo $male;
echo "<br>";
echo $district;
echo "<br>";
echo $mobile;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $conformpassword;
}

?>