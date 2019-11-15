<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form method="GET">
    <table class="table">
    <tr>
    <td>
    username
    </td>
    <td>
    <input type="text" class="form-control" name="username">
    </td>
    </tr>
    <tr>
    <td>
    password
    </td>
    <td>
    <input type="password" class="form-control" name="password">
    </td>
    </tr>
    <tr>
    <td>
    
    </td>
    <td>
    <button type="submit" class="btn btn-success" name="mybutton">login</button>
    </td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['mybutton']))
{
    $name=$_GET['username'];
    $password=$_GET['password'];

    echo $name;
    echo "<br>";
    echo $password;
}

?>