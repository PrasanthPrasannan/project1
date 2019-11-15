<?php
if(isset($_POST['facultyname'])){

$facultyname=$_POST['facultyname'];


$ServerName="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="employee";

$connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);

$sql="SELECT `facultyname`, `address`, `gender`, `pincode`, `qualification`, `department` FROM `faculty-details` WHERE `facultyname`='$facultyname'";

$result=$connection->query($sql);

$r=array();
    
if($result->num_rows>0){
    

    echo "<table class='table'> ";
    while($row=$result->fetch_assoc()){
    
    $Facultyname=$row['facultyname'];
    $address=$row['address'];
    $gender=$row['gender'];
    $pincode=$row['pincode'];
    $qualification=$row['qualification'];
    $department=$row['department'];
    
    echo " <tr>  <td>Faculty Name</td><td>  <input type='text' class='form-control' id='faculty_name' value='$Facultyname'/>  </td></tr>
    <tr><td>Address</td><td><input type='text' class='form-control' id='adrs' value='$address'/>  </td></tr> 
    <tr>  <td>gender</td> <td> <input type='text' class='form-control' id='gndr' value='$gender' /> </tr> 
    <tr>  <td>pincode</td> </td> <td><input type='text' class='form-control' id='pncde' value='$pincode' /> </td></tr>
     <tr>  <td>Qualification</td> <td><input type='text' class='form-control' id='qufictn' value='$qualification' /></td></tr>
     <tr>  <td>Department</td> <td><input type='text' class='form-control' id='dpt' value='$department' /></td></tr> ";
    }
    echo "<tr><td></td> <td> <Button class='btn btn-info' type='button' id='save' value='$facultyname'> SAVE DATA</Button>  </td> </tr> ";

    
    echo "</table>";
//echo json_encode($r);

 }
 else{
echo "Invalid faculty code";


 }

}


?>

<script>

$(document).ready(function(){
$("#save").click(function(){

console.log('test');

var facultyname=$("#faculty_name").val();
var address=$("#adrs").val();
var gender=$("#gndr").val();
var pincode=$("#pncde").val();
var qualification=$("#qufictn").val();
var department=$("#dpt").val();


console.log(facultyname);
console.log(address);
console.log(gender);
console.log(pincode);
console.log(qualification);
console.log(department);


$.ajax({

type:'POST',
url:'facultyupdateapi.php',
data:{faculty_name:facultyname,adrs:address,gndr:gender,pncde:pincode,qufictn:qualification,dpt:department},
success:function(response){
    console.log(response);
}

})



})

})


</script>


<script>

$(document).ready(function(){
$("#delete").click(function(){

    console.log("test");

    var facultyname=$("#faculty_name").val();
var address=$("#adrs").val();
var gender=$("#gndr").val();
var pincode=$("#pncde").val();
var qualification=$("#qufictn").val();
var department=$("#dpt").val();


console.log(facultyname);
console.log(address);
console.log(gender);
console.log(pincode);
console.log(qualification);
console.log(department);


$.ajax({

type:'POST',
url:'facultyupdateapi.php',
data:{faculty_name:facultyname,adrs:address,gndr:gender,pncde:pincode,qufictn:qualification,dpt:department},
success:function(response){
    console.log(response);
}

})



})

})




</script>