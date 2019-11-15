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


$(document).ready(function(){

$("#search").click(function(){

    console.log("test");

var facultyname=$("#facultyname").val();



$.ajax({

type:'POST',
url:'facultysearchapi.php',
data:{facultyname:facultyname},
success:function(response){
console.log(response);

$("#facultydetails").html(response);

}

})

})

})


</script>
</head>
<body>
<div class="container border">
<div class="row">
<h3 style="text-align:center; width:100%";>Faculty Search</h3>
<div class="col col-md-12">
<form method="POST">
<table class="table">
<tr>
<td>
Faculty Name
</td>
<td>
<input type="text" class="form-control" id="facultyname">
</td>
</tr>
<tr>
<td>
</td>
<td>
<button type="button" class="btn btn-success" id="search">SEARCH</button>
</td>
</tr>




</table>
</form>

<div class="row">
<div class="col-md-12">
<div id="facultydetails">


</div>
</div>
</div>

</div>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['search'])){

$facultyname=$_POST['facultyname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="SELECT `facultyname`, `address`, `gender`, `pincode`, `qualification`, `department` FROM `faculty-details` WHERE `facultyname`='$facultyname'";

$result=$connection->query($sql);

    
if($result->num_rows>0){
    

    echo "<table class='table'> ";
while($row=$result->fetch_assoc()){

$Facultyname=$row['facultyname'];
$address=$row['address'];
$gender=$row['gender'];
$pincode=$row['pincode'];
$qualification=$row['qualification'];
$department=$row['department'];

echo "<tr><td>Address</td><td><input type='text' class='form-control' id='fac_name' value='$Facultyname'/></td></tr>
 <tr>  <td>Address</td>   <td>  <input type='text' class='form-control' id='adrs' value='$address'/>  </td></tr>
 <tr>  <td>gender</td> <td> <input type='text' class='form-control' value='$gender' /> </tr> <tr>  
 <td>pincode</td> </td> <td><input type='text' class='form-control' value='$pincode' /> </td></tr> 
 <tr>  <td>Qualification</td> <td><input type='text' class='form-control' value='$qualification' /></td></tr>
 <tr>  <td>Department</td> <td><input type='text' class='form-control' value='$department' /></td></tr>
 <tr>  <td></td> <td><button type='button' class='form-control' id='save'>  </button></td></tr>
 ";
}


echo "</table>";


 }
 else{
echo "Invalid faculty code";


 }

}

?>