<?php

if(isset($_POST['empcode'])){


    $employee_code=$_POST['empcode'];



$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";


    $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

    $sql="SELECT `name`, `designation`, `salary`, `place` FROM `employee_details` WHERE `empcode`='$employee_code'";
    
    $result=$connection->query($sql);

    

if($result->num_rows>0){
    
$r=array();
    
echo "<form method='POST'><table class='table'> ";
while($row=$result->fetch_assoc()){

   
    $employeename=$row['name'];
    $designation=$row['designation'];
    $salary=$row['salary'];
    $place=$row['place'];


    echo " <tr>  <td>Employee name</td>   <td>  <input type='text' class='form-control' id='emp_name' value='$employeename' />  </td></tr>
     <tr>  <td>Designation</td> <td> <input type='text' class='form-control' id='desg' value='$designation' /> </tr>
      <tr>  <td>Salary</td> </td> <td><input type='text' class='form-control' id='sal' value='$salary' /> </td></tr>
       <tr>  <td>Place</td> <td><input type='text' class='form-control' id='plc' value='$place' /></td></tr> ";

}

echo " <tr> <td>   </td> <td> <Button class='btn btn-info' type='button' id='savebut' value='$employee_code'> SAVE DATA</Button>
<Button class='btn btn-info' type='button' id='delete' value='$employee_code'>DELETE</Button>  </td> </tr> ";



echo "</table> </form>";

// echo json_encode($r);
 }
 else{
echo "Invalid employee code";


 }

}

?>




<script>

$(document).ready(function(){





    $("#savebut").click(function(){

console.log("test...");

var empname=$("#emp_name").val();
var designation=$("#desg").val();
var salary=$("#sal").val();
var place=$("#plc").val();

var empcode=$("#empcode").val();


console.log(empname);
console.log(designation);
console.log(salary);


$.ajax({

type:'POST',
url:'employeeupdateapi.php',
data:{empcode:empcode,emp_name:empname,desg:designation,sal:salary,plc:place},
success:function(response){

 var res=JSON.parse(response);

 var result=res.Status;

 if(result=="Data Updated"){

  alert('Data Updated Successfully');

  window.location.href='employeesearch.php';

 }
 else{

    alert('Data Updated Successfully');
 }

console.log(response);


}

})

})  


    
$("#delete").click(function(){

console.log("Test");

var employee_codes=$("#empcode").val();


$.ajax({


type:'POST',
url:'employeedeleteapi.php',
data:{empcode:employee_codes},
success:function(response){

var res=JSON.parse(response);

var result=res.Result;

if(result=="Data Deleted")
{
alert('Data Deleted Succesfully');
window.location.href='employeesearch.php';

}
else{
    alert('Failed to  Delete');


}


}


})

})



})

</script>

