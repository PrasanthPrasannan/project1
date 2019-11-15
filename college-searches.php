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
<td> Admission Number</td>
<td>
<input type="text" class="form-control" type="number" name="admn-no">
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

$admnnumber=$_POST['admn-no'];

$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="SELECT `name`, `rollno`, `admno`, `college` FROM `college` WHERE `admno`='$admnnumber'";

$result=$connection->query($sql);

if($result->num_rows>0){

    echo "<form method='POST'><table class='table'> ";
    

    while($row=$result->fetch_assoc()){

    $name=$row['name'];
    $rollno=$row['rollno'];
    $admno=$row['admno'];
    $college=$row['college'];

    echo "<tr><td>Name</td> <td><input type='text' class='form-control' name='names' value='$name'/>  </td></tr>
    <tr><td>Roll Number</td> <td><input type='text' class='form-control' name='rollnumber' value='$rollno'/>  </td></tr> 
    <tr><td>Adm No Number</td> <td><input type='text' class='form-control' name='admnumber' value='$admno' readonly/>  </td></tr>
    <tr><td>College</td> <td><input type='text' class='form-control' name='colleges' value='$college'/>  </td></tr>
    <tr><td></td><td><button type='submit' class='btn btn-success' name='updatesubmit'>UPDATE</button> <button type='submit' class='btn btn-success' name='delete'>DELETE</button> </td></tr>
    <tr></tr>
    ";
    
    }
    echo "</table> </form>";
}
    else{

        echo "Invalid code";
    }
}

if(isset($_POST['updatesubmit'])){

    $names=$_POST['names'];
    $rollnumbers=$_POST['rollnumber'];
    $admnumber=$_POST['admnumber'];
    $colleges=$_POST['colleges'];

    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DbName="study";

    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

    $sql="UPDATE `college` SET `name`='$names',`rollno`=$rollnumbers,`admno`=$admnumber,`college`='$colleges' WHERE `admno`='$admnumber'";

$result=$connection->query($sql);

if($result===TRUE){

  echo "<script>alert('Data Inserted')</script>";
}
else{

  echo "<script>alert('Data Insertion Failed')</script>";
}

}

if(isset($_POST['delete'])){

$admission_number=$_POST['admnumber'];

$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="DELETE FROM `college` WHERE `admno`='$admission_number'";

$result=$connection->query($sql);

if($result===TRUE){

echo "<script> alert('Data Deleted')</script>";
}
else
{
    echo "<script> alert('Data Deletion Failed')</script>";
}

}

?>
