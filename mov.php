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

  $("#submit").click(function()


 {
 
  var moviename=$("#moviename").val();
  var actor=$("#actor").val();
  var actress=$("#actress").val();
  var director=$("#director").val();




  $.ajax({

  type:'POST',
  url:'movapi.php',
  data:{moviename:moviename,actor:actor,actress:actress,director:director},
  success:function(response){

      console.log(response);

  }

  })

 }
 )

 }
 )
     


//   function read(){

//     console.log("Test");

// var moviename=document.getElementById("moviename").value;
// var actor=document.getElementById("actor").value;
// var actress=document.getElementById("actress").value;
// var director=document.getElementById("director").value;

// console.log(moviename);
// console.log(actor);
// console.log(actress);
// console.log(director);


//   }

   </script>

</head>
<body>
    
<div class="container border">
<div class="row">
<div class="col-md-12">
<h1 style="font-size:15px;text-align:center;">Movie</h1>
<form method="POST">
<table class="table">
<tr>
<td>
Movie Name
</td>
<td>
<input type="text" class="form-control" id="moviename">
</td>
</tr>
<tr>
<td>
Actor
</td>
<td>
<input type="text" class="form-control" id="actor">
</td>
</tr>
<tr>
<td>
Actress
</td>
<td>
<input type="text" class="form-control" id="actress">
</td>
</tr>
<tr>
<td>
Director
</td>
<td>
<input type="text" class="form-control" id="director">
</td>
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

$moviename=$_POST['moviename'];
$actor=$_POST['actor'];
$actress=$_POST['actress'];
$director=$_POST['director'];

$ServerName="localhost";
$DbUserName="root";
$DbPassword="";
$DbName="study";


$connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DbName);

$sql="INSERT INTO `movie`(`moviename`, `actor`, `actress`, `director`) VALUES ('$moviename','$actor','$actress','$director')";

$result=$connection->query($sql);

    if($result===TRUE){
        echo "<script> alert('Data Inserted')</script>";
    }
    else{
        echo "<script> alert('Data Insertion Failed') </script>";
    }

}

?>
