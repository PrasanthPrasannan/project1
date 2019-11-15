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
<script>
$(document).ready(function(){

$("#success").click(function(){

    console.log("test");

    var manufacture=$("#manufacture").val();
    var model=$("#model").val();
    var price=$("#price").val();
    var processor=$("processor").val();
    var ram=$("ram").val();
    var internal=$("internal").val();


    $.ajax({

   type:'POST',
   url:'mobilapi.php',
   data:{manufacture:manufacture,model:model,price:price,processor:processor,ram:ram,internal:internal},
   success:function(response){

       console.log(response);
  
   }

  })

})

})

</script>
<body>


<div class="container border">
<div class="col col-md-12">

   <form method="POST">
   <table class="table">
   <tr>
   <td>
   Mobile Manufacture
   
   </td>
   <td>
   
<select id="manufacture" class="form-control">
<option value="samsung">Samsung</option>
<option value="nokia">Nokia</option>
<option value="redmi">Redmi</option>
<option value="honor">Honor</option>
   </td>
   </tr>

    <tr>
    <td>
    Mobile Model
    </td>
    <td>
    
    <input type="text" class="form-control" id="model">
    </td>
    </tr>

    <tr>
    <td>
    Price
    </td>
    <td>
    <input type="number" class="form-control" id="price">
    </td>
    </tr>
    <tr>
    <td>
    Processor
    </td>
    <td>
    <input type="text" class="form-control" id="processor">
    </td>
    </tr>

    <tr>
    <td>
    Ram
    </td>
    <td>
    <input type="number" class="form-control" id="ram">
    </td>
    </tr>

    <tr>
    <td>
    Internal Storage
    </td>
    <td>
    <input type="number" class="form-control" id="internal">
    </td>
    </tr>
    <tr>
    <td>
    </td>
    <td>
    
    <button type="button" class="btn btn-success" id="success">SUBMIT</button>
    </td>
    
    </tr>

   </table>
   </form>
</div>
</div>
</body>
</html>

<?php
 if(isset($_POST['success']))
 {
 $manufacture=$_POST['manufacture'];
 $model=$_POST['model'];
 $price=$_POST['price'];
 $processor=$_POST['processor'];
 $ram=$_POST['ram'];
 $internal=$_POST['internal'];



 $Servername="localhost";
 $DbUsername="root";
 $DbPassword="";
 $DbName="myclass";

 $connection=new mysqli($Servername,$DbUsername,$DbPassword,$DbName);

 $sql="INSERT INTO handsetdetails(manufacture, model, price, processor, ram, internal) values('$manufacture', '$model', $price, '$processor', $ram, $internal)";

 $result=$connection->query($sql);

 if($result===TRUE){
     echo "<script> alert('Data Inserted')</script>";
 }
 else{
     echo "<script> alert('Data Insertion Failed') </script>";
 }
}
?>