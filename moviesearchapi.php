<?php
if(isset($_POST['name']))
{
$moviename=$_POST['name'];



$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="db";

 $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

 $sql="SELECT  `producer`, `actor`, `year`, `actress` FROM `movies` WHERE `moviename`='$moviename'";

 $result=$connection->query($sql);


 if($result->num_rows>0){

    $r=array();

    echo "<table class='table'> <tr> <th>  Producer  </th>  <th>  Actor  </th>  <th>  Year  </th> <th> </th></tr> ";
    while($row=$result->fetch_assoc()){
        
    
        $producer=$row['producer'];
        $actr=$row['actor'];
        $yr=$row['year'];
        $actress=$row['actress'];
    
        echo " <tr> <td>   $producer  </td>  <td>  $actr  </td>  <td> $yr  </td></tr> ";
    
    }
    
    echo "</table>";
    

// echo json_encode($r);

 }
 else{
echo "Invalid Movie name";


 }
}
?>