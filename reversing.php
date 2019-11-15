<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form method="GET">
   <table class="table">
   <tr>
   <td>
   Enter a number
   </td>
   <td>
   <input type="number" class="form-control" name="number">
   </td>
   </tr>
   <tr>
   <td></td>
   <td>
   <button type="submit" class="btn btn-success" name="reversebutton">Find Reverse</button>
   </td>
   </tr>
   
   </table> 
    
</form>
    
</body>
</html>
<?php
if(isset($_GET['reversebutton']))
{


    function Reverse($n)
    {
    
        $rev=0;
     while($n>0)
     {
        $rem=$n%10;
        $rev=($rev*10)+$rem;
         $n=intval($n/10);    
     }
     return $rev;
    
    
    
    }


 $number=$_GET['number'];


 $GetReverse=Reverse($number);

 echo $GetReverse;





 
}


?>