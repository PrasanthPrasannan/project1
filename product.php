<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<!-- <style>
.mybody{
    background:#00bbcc
}

.mybutton{
    background:red
}

</style> -->


</head>
<body class="mybody">
    <form method="GET">
    <table class="mybody table">
    <tr>
    <td>
    Product Name
    </td>
    <td>
    <input type="text" class="form-control" name="product_name">
    </td>
    </tr>
    <tr>
    <td>
    Product Quantity
    </td>
    <td>
    <input type="number" class="form-control" name="product_quantity">
    </td>
    </tr>
     <tr>
     <td>
     Product Description
     </td>
     <td>
     <textarea cols="21" rows="5" class="form-control" name="discription"></textarea>
     </td>
     </tr>
<tr>
<td>
Manufacturing Date
</td>
<td>
<input type="date" class="form-control"name="manufactr_date">
</td>
</tr>
<tr>
<td>
Expiry Date
</td>
<td>
<input type="date" class="form-control" name="expiry">
</td>
</tr>
<tr>
<td>
For Diseases
</td>

<td>
<input type="radio" name="disease" value="fever">
Fever
<br>
<input type="radio" name="disease" value="diareya">
Diareya
<br>
<input type="radio" name="disease" value="malaria">
Malaria
</td>

</tr>
<tr>
<td>
Prescribed By

</td>
<td>
<select name="prescribed" class="form-control">
<option value="Doctor">Doctor</option>
<option value="Non-Doctor">Non-Doctor</option>

</select>
</td>

</tr>


<tr>
<td>
<button type="reset" class="btn btn-primary"> Clear </button>
</td>
<td>
<button type="submit" class="btn btn-success" name="mybutton">Submit</button>
</td>
</tr>
    </table>
    
    
    
    </form>
</body>
</html>

<?php
if(isset( $_GET['mybutton']))
{
$product_name=$_GET['product_name'];
$product_quantity=$_GET['product_quantity'];
$discription=$_GET['discription'];
$manufacturing_date=$_GET['manufactr_date'];
$expiry=$_GET['expiry'];
$disease=$_GET['disease'];
$prescribed=$_GET['prescribed'];


echo $product_name;
echo "<br>" ;
echo $product_quantity; 
echo "<br>" ;
echo $discription;
echo "<br>" ;
echo $manufacturing_date;
echo "<br>" ;
echo $expiry;
echo "<br>" ;
echo $disease;
echo "<br>" ;
echo $prescribed;
}

?>