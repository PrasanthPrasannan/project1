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
<div class="col-md-12">
<h1 style="font-size:30px;text-align:center;">College Search</h1>
<form method="POST">
<table class="table">
<tr>
<td> College name</td>
<td>
<input type="text" class="form-control" name="college-name">
</td>
</tr>
<tr>
<td>

</td>
<td>
<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
</td>
</tr>

</table>
<form>
</div>
</div>   
<div>
</body>
</html>

<?php
if(isset($_POST['submit'])){

$collegename=$_POST['college-name'];

$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="SELECT `name`, `rollno`, `admno`, `college` FROM `college` WHERE `college`='$collegename'";

$result=$connection->query($sql);

if($result->num_rows>0){

    echo "<form method='GET'><table class='table'> ";
    echo "<tr><th>Name  </th><th>Roll number </th><th>Adm Number</th><th>College  </th> </tr>";

    while($row=$result->fetch_assoc()){

    $name=$row['name'];
    $rollno=$row['rollno'];
    $admno=$row['admno'];
    $college=$row['college'];

    echo "<tr> <td> $name  </td><td> $rollno </td> <td>$admno  </td>  <td>$college  </td> </tr>
    
    ";

    }
    echo "</table> </form>";
}
    else{

        echo "Invalid code";
    }
}
?>
