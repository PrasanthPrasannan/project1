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
   <div class="col col-md-12">
   <h3 style="text-align:center";>Movie Search</h3>
   <form method="GET">
   <table class="table">
   <tr>
   <td>
   Movie Name
   </td>
   <td>
   <input type="text" class="form-control" name="name">
   </td>
   </tr>
  <tr>
  <td></td>
  <td>
  <button type="submit" class="btn btn-success" name="success">SEARCH</button>
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

if(isset($_GET['success'])){

    $moviename=$_GET['name'];



    $Servername="localhost";
    $DbUsername="root";
    $DbPassword="";
    $DbName="db";


    $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);


    $sql="SELECT `moviename`, `producer`, `actor`, `year`, `actress` FROM `movies` WHERE `moviename`='$moviename'";

    $result=$connection->query($sql);

   
    if($result->num_rows>0)
 {

echo "<form GET='GET'><table class='table'>";
while($row=$result->fetch_assoc()){
    

    $producer=$row['producer'];
    $actr=$row['actor'];
    $yr=$row['year'];
    $actress=$row['actress'];

    echo " <tr><td> Producer </td><td> <input class='form-control' name='producers' value='$producer'></td></tr>
    
      <tr><td> Actor </td><td> <input class='form-control' name='actors' value='$actr'></td></tr>
      <tr><td> Year </td><td> <input class='form-control' name='years' value='$yr'></td></tr>
      <tr><td> Actress </td><td> <input class='form-control' name='actresses' value='$actress'></td></tr> 

      <tr><td></td><td><buton type='submit' class='btn btn-success' name='savebut'>SUBMIT</button></td></tr>";
      
      }

echo "</table></form>";


 }
 else{
echo "Invalid Movie name";


 }
}

if(isset($_GET['savebut'])){

$movie_name=$_GET['savebut'];
$producers=$_GET['producers']; 
$actors=$_GET['actors'];
$years=$_GET['years'];
$actresses=$_GET['actresses'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="UPDATE `movies` SET `producer`='$producers',`actor`='$actors',`year`=$years,`actress`='$actresses' WHERE `moviename`='$movie_name'";

$result=$connection->query($sql);

if($result===TRUE){

  echo "<script>alert('Data Inserted')</script>";
}
else{

  echo "<script>alert('Data Insertion Failed')</script>";
}

}

?>