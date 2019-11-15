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
    Enter a Number
    </td>
    <td>
    <input type="text" class="form-control" name="number">
    </td>
    </tr>
    <tr>
    <td></td>
    <td>
    <button type="submit" class="btn btn-success" name="mybutton">Check even or odd</button>
    </td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['mybutton']))
{
    $number=0;
    $number=$_GET['number'];
    
    $c=$number%2;
    
    if($c==0)
        echo "Number is even";
    else
    echo "Number is odd";
}
?>