
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
<h1 style="text-align:center; font-size:28px;">STUDENT SEARCH</h1>
<form method="POST">
<table class="table">
<tr>
<td>
Admission Number
</td>
<td>
<input type="text" class="form-control" name="admno">
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
</form>
</div>
</div>
</div>  
</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

$admission_number=$_POST['admno'];


$sql="SELECT * FROM `student_details` WHERE `admno`='$admission_number'";

$result=$connection->query($sql);


if($result->num_rows>0){

  echo "<div class='container border'> <div class='row'> <div class='col-md-12'>";
  echo "<h1 style='text-align:center; font-size:18px;'>Student Details</h1>";
  echo "<form method='POST'> <table class='table'>";

  while($row=$result->fetch_assoc()){

    $admno=$row['admno'];
    $name=$row['name'];
    $rollno=$row['rollno'];
    
    $college=$row['college'];
   
    echo "<tr><td>Admission Number</td><td><input type='text' class='form-control' name='admnos' value='$admno'></td></tr>";

    echo "<tr><td>Name</td><td><input type='text' class='form-control' name='names' value='$name'></td></tr>";
    echo "<tr><td>Roll Number</td><td><input type='text' class='form-control' name='rollnos' value='$rollno'></td></tr>"; 
    echo "<tr><td>College</td><td><input type='text' class='form-control' name='colleges' value='$college'></td></tr>";
    echo "<tr><td></td><td><button type='submit' class='btn btn-success' name='update'>UPDATE</button>  
        <button type='submit' class='btn btn-success' name='delete'>DELETE</button></td></tr>";
}
echo "</table> </form>";
    echo "</div> </div> </div>";
}

else{

  echo "<script>alert('Invalid Credential')</script>";
}

}
?>

<?php

if(isset($_POST['update'])){

  $admnos=$_POST['admnos'];
  $names=$_POST['names'];
  $rollnos=$_POST['rollnos'];
  $colleges=$_POST['colleges'];


  $sql="UPDATE `student_details` SET `name`='$names',`rollno`=$rollnos,`admno`=$admnos,`college`='$colleges' WHERE `admno`='$admnos'";

 $result=$connection->query($sql);

if($result===TRUE){

  echo "<script>alert('Data Updated')</script>";
}
else{
  echo "<script>alert('Data Updation Failed')</script>";
}
}


if(isset($_POST['delete'])){

  $student_delete=$_POST['admnos'];


  $sql="DELETE FROM `student_details` WHERE `admno`=$student_delete";

  $result=$connection->query($sql);


if($result===TRUE){

echo "<script>alert('Data Deleted')</script>";

}
else{

    echo "<script>alert('Data Deletion Failed')</script>";
}
    
}

?>