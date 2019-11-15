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

$("#success").click(function(){

console.log("test");

var moviename=$("#name").val();


$.ajax({

type:'POST',
url:'moviesearchapi.php',
data:{name:moviename},
success:function(response){
    console.log(response);

$("#moviedetails").html(response);
}
})

})    
})

</script>
</head>
<body>
    <div class="container border">
    <div class="row">
   <div class="col col-md-12">
   <h3 style="text-align:center";>Movie Search</h3>
   <form method="POST">
   <table class="table">
   <tr>
   <td>
   Movie Name
   </td>
   <td>
   <input type="text" class="form-control" id="name">
   </td>
   </tr>
  <tr>
  <td></td>
  <td>
  <button type="button" class="btn btn-success" id="success">SEARCH</button>
  </td>
  </tr>   
   </table>
   </form>
<div class="row">
<div class="col-md-12">
<div id="moviedetails">

</div>
</div>
</div>
   </div>
    </div>
    </div>
</body>
</html>


<?php
if(isset($_POST['success']))
{
$moviename=$_POST['name'];



$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";

 $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

 $sql="SELECT  `producer`, `actor`, `year`, `actress` FROM `movies` WHERE `moviename`='$moviename' ";

 $result=$connection->query($sql);

 if($result->num_rows>0)
 {

echo "<table class='table'> <tr> <th>  Producer  </th>  <th>  Actor  </th>  <th>  Year  </th> <th> </th></tr> ";
while($row=$result->fetch_assoc()){
    

    $producer=$row['producer'];
    $actr=$row['actor'];
    $yr=$row['year'];
    $actress=$row['actress'];

    echo " <tr> <td>   $producer  </td>  <td>  $actr  </td>  <td> $yr  </td></tr> ";

}

echo "</table>";


 }
 else{
echo "Invalid Movie name";


 }




}
?>