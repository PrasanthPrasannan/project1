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
   <h3 style="text-align:center; width:100%";>BUS SEARCH</h3>
   <div class=" col col-md-12">
   <form method="GET">
   <table class="table">
   <tr>
   <td>
   Bus Number
   </td>
   <td>
   <input type="text" class="form-control" name="number">
   </td>
   </tr>
   <tr>
   <td></td>
   <td>
   <button type="submit" class="btn btn-success" name="search">SEARCH</button>
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

if(isset($_GET['search'])){

$busnumber=$_GET['number'];


$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";


$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="SELECT  `busname`, `route`, `drivername`, `conductorname` FROM `bus` WHERE `busnumber`='$busnumber'";

$result=$connection->query($sql);

if($result->num_rows>0){

    echo "<form method='GET'> <table class='table'>";
    while($row=$result->fetch_assoc()){

        $busname=$row['busname'];
        $route=$row['route'];
        $drivername=$row['drivername'];
        $conductorname=$row['conductorname'];
      
       echo  "<tr> <td> Bus Name  </td>  <td><input type='text' class='form-control' name='bus-name' value='$busname'></td>   </tr>
              <tr> <td> Route  </td>  <td><input type='text' class='form-control' name='routes' value='$route'></td>   </tr> 
              <tr> <td> Driver Name  </td>  <td><input type='text' class='form-control' name='drvr-name' value='$drivername'></td>   </tr>
              <tr> <td> Bus Conductorname  </td>  <td><input type='text' class='form-control' name='conductor-name' value='$conductorname'></td>   </tr>";

    }
    echo " <tr> <td>   </td> <td> <Button class='btn btn-info' type='submit' name='savebut' value='$busnumber'> SAVE</Button>  </td> </tr> ";

    echo "</table> </form>";

     }
     else{
    echo "Invalid Bus number";
    
     }
    }
    
if(isset($_GET['savebut'])){

$bus_number=$_GET['savebut'];
$bus_name=$_GET['bus-name'];
$routes=$_GET['routes'];
$drvrname=$_GET['drvr-name'];
$conductor_name=$_GET['conductor-name'];

$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="study";

$connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

$sql="UPDATE `bus` SET `busname`='$bus_name',`route`='$routes',`drivername`='$drvrname',`conductorname`='$conductor_name' WHERE `busnumber`='$bus_number'";

$result=$connection->query($sql);

if($result===TRUE){

   echo "<script> alert('Data inserted')</script>";
}
else{
    echo "<script>alert('Data Insersion Failed')</script>";
}
}


?>