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

var productname=$("#pdtname").val();
var price=$("#price").val();
var destination=$("#destn").val();
var dealername=$("#dealrname").val();

$.ajax({

type:'POST',
url:'productapi.php',
data:{productname:pdtname,price:price,destination:destn,dealername:dealrname},
success:function(response){

    console.log(response);

}

})

})    
    
})



</script>
</head>
<body>
<div class="container border">
<div class="row">
<div class="col-md-12">
<h1 style="font-size:15px;text-align:center;">product</h1>
<form method="POST">
<table class="table">
<tr>
<td>
Product Name
</td>
<td>
<input type="text" class="form-control" id="pdtname">
</td>
</tr>
<tr>
<td>
Price
</td>
<td>
<input type="text" class="form-control" id="price">
</td>
</tr>
<tr>
<td>
Description
</td>
<td>
<input type="text" class="form-control" id="destn">
</td>
</tr>
<tr>
<td>
Dealers Name
</td>
<td>
<input type="text" class="form-control" id="dealrname">
</td>
</tr>

</tr>
<tr>
<td></td>
<td>
<button type="button" class="btn btn-success" id="submit">SUBMIT</button>
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
if(isset($_POST['submit'])){

$productname=$_POST['pdtname'];
$price=$_POST['price'];
$description=$_POST['destn'];
$dealername=$_POST['dealrname'];


$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";


$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="INSERT INTO `product`(`pdtname`, `price`, `destn`, `dealrname`) VALUES ('$productname',$price,'$description','$dealername')";

$result=$connection->query($sql);

    if($result===TRUE){

        echo "<script> alert('Data Inserted')</script>";

    }
    else{

        echo "<script> alert('Data Insertion Failed') </script>";

    }

}

?>
