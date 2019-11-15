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
    Number 1
    </td>
     <td>
     <input type="text" class="form-control" name="number1">
     </td>    
    </tr>

    <tr>
    <td>
    Number 2
    </td>
     <td>
     <input type="text" class="form-control" name="number2">
     </td>    
    </tr>

    <tr>
    <td>
    Number 3
    </td>
     <td>
     <input type="text" class="form-control" name="number3">
     </td>    
    </tr>
    <tr>
    <td></td>
    <td>
    <button type="submit" class="btn btn-success" name="mybutton">Find Largest</button>
    </td>
    </tr>
    
    </table>
    
    
    </form>

</body>
</html>
<?php
if(isset($_GET['mybutton']))
{
    $number1=$_GET['number1'];
    $number2=$_GET['number2'];
    $number3=$_GET['number3'];

    function Greater($number1, $number2, $number3)
    {

    if($number1>$number2)
    {
    

        if($number1>$number3)
        {
            echo $number1." is greater";

        }
        else{
            echo $number3." is greater";


        }
   

}
    else 
    {
        if($number2>$number3)
        {
            echo $number2." is greater";

        }
        else{
            echo $number3." is greater";

        }

    }
    
}
$Getlargest=Greater($number1,$number2,$number3);

 echo $Getlargest;
}
?>
