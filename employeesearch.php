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


function test(){
console.log('ffff')
}



$("#search").click(function(){

console.log("test");

var employeesearch=$("#empcode").val();


$.ajax({

type:'POST',
url:'employeeapi.php',
data:{empcode:employeesearch},
success:function(response){

 console.log(response);   

 $("#employeedetails").html(response);
}

})









});


// Edit Button Click Event 





})

</script>



</head>
<body>
  <div class="container border">
  <div class="row">
  <h3 style="text-align:center; width:100%";>EMPLOYEE SEARCH</h3>
  <div class="col col-md-12">
  <form method="POST">
   <table class="table">
<tr>
<td>Employee Code</td>
<td>
<input type="text" class="form-control" id="empcode">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="button" class="btn btn-success" id="search">SEARCH</button>
</td>
</tr>
 </table>
</form>
<div class="container">
<div class="row">
<div class="col-md-12">
<div id="employeedetails">

</div>
</div>
</div>
</div>

  </div>
  </div>
  </div>  
</body>
</html>
