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

$("#submit").click(function(){

console.log("test");

var facultyname=$("#facultyname").val();
var address=$("#address").val();
var gender=$("#gender").val();
var pincode=$("#pincode").val();
var qualification=$("#qualification").val();
var department=$("#department").val();



$.ajax({

type:'POST',
url:'facultyapi.php',
data:{facultyname:facultyname,address:address,gender:gender,pincode:pincode,qualification:qualification,department:department},
success:function(response){
    console.log(response);
}
})


})


})

// function read(){

//     console.log("Test");


//     var facultyname=document.getElementById("facultyname").value;
//     var address=document.getElementById("address").value;
//     var gender=document.getElementById("gender").value;
//     var pincode=document.getElementById("pincode").value;
//     var qualification=document.getElementById("qualification").value;
//     var department=document.getElementById("department").value;

//     console.log(facultyname);
//     console.log(address);
//     console.log(gender);
//     console.log(pincode);
//     console.log(qualification);
//     console.log(department);
// }


</script>

</head>
<body>
 <div class="container border">
 <div class="row">
 <h3 style="text-align:center; width:100%";>Faculty Details</h3>
 <div class="col col-md-12">
<form method="GET">
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
Faculty Address
</td>
<td>
<textarea id="address" class="form-control" cols="20" rows="5"></textarea>
</td>
</tr>
<tr>
<td>
Gender
</td>
<td>
<input type="radio" id="gender" value="male">
Male
<input type="radio"  id="gender" value="female">
Female
</td>
</tr>
<tr>
<td>
Pincode
</td>
<td>
<input type="number" class="form-control" id="pincode">
</td>
</tr>
<tr>
<td>
Educational Qualification
</td>
<td>
<input type="text" class="form-control" id="qualification">
</td>
</tr>
<tr>
<td>
Department
</td>
<td>
<select id="department" class="form-control">
<option value="CS"> CS</option>
<option value="MECH">MECH</option>
<option value="EC">EC</option>
<option value="EEE">EEE</option>
<option value="CIVIL">Civil</option>
</select>
</td>
</tr>
<tr>
<td>
<button type="reset" class="btn btn-success">RESET</button>
</td>
<td>
<button type="button" class="btn btn-success" id="submit">SUBMIT</button>
</td>
</tr>
</table>
</form>
 </div>
 </div>
 <div>
</body>
</html>

<?php
if(isset($_POST['submit'])){

$facultyname=$_POST['facultyname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$pincode=$_POST['pincode'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="INSERT INTO `faculty-details`(`facultyname`, `address`, `gender`, `pincode`, `qualification`, `department`) VALUES ('$facultyname','$address','$gender',$pincode,'$qualification','$department')";

$result=$connection->query($sql);

if($result===TRUE){
    echo "<script> alert('Data Inserted')</script>";
}
else{
    echo "<script> alert('Data Insertion Failed') </script>";
}

}
?>