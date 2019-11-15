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
<div class="container">
<div class="row">
<div class="col- 12 col-sm-12 col-md-12 col-lg-12">
    <form method="GET">
    <table class="table">
<div class="col col-md-12">
    <tr>
<td>
<td>
Name
</td>
<td>
<input type="text" class="form-control" name="name"> 
</td>

</td>
    
<td>
<td>
Candidate Code
</td>
<td>
<input type="text" class="form-control" name="candidatecode">
</td>

</td>

    </tr>
</div>

<div class="col col-md-12">
    <tr>
<td>
<td>
Exam Code
</td>
<td>
<input type="text" class="form-control" name="examcode"> 
</td>

</td>
    
<td>
<td>
Semester
</td>
<td>
<select  class="form-control" name="semester">
<option value="S1&S2">S1&S2</option>
<option value="S3">S3</option>
<option value="S4">S4</option>
<option value="S5">S5</option>
<option value="S6">S6</option>
<option value="S7">S7</option>
<option value="S8">S8</option>
</td>
</td>
</tr>

</div>


<tr>
<td>
<td>
Sub 1 Name
</td>
<td>
<input type="name" class="form-control" name="sub1"> 
</td>
</td>

<td>
<td>
Sub 1 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub1-markobtained"> 
</td>
</td>
<td>
<td>
Sub 1 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub1-totalmark"> 
</td>
</td>
</tr>



<tr>
<td>
<td>
Sub 2 Name
</td>
<td>
<input type="name" class="form-control" name="sub2"> 
</td>
</td>

<td>
<td>
Sub 2 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub2-markobtained"> 
</td>
</td>
<td>
<td>
Sub 2 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub2-totalmark"> 
</td>
</td>
</tr>


<tr>
<td>
<td>
Sub 3 Name
</td>
<td>
<input type="name" class="form-control" name="sub3"> 
</td>
</td>

<td>
<td>
Sub 3 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub3-markobtained"> 
</td>
</td>
<td>
<td>
Sub 3 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub3-totalmark"> 
</td>
</td>
</tr>



<tr>
<td>
<td>
Sub 4 Name
</td>
<td>
<input type="name" class="form-control" name="sub4"> 
</td>
</td>

<td>
<td>
Sub 4 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub4-markobtained"> 
</td>
</td>
<td>
<td>
Sub 4 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub4-totalmark"> 
</td>
</td>
</tr>



<tr>
<td>
<td>
Sub 5 Name
</td>
<td>
<input type="name" class="form-control" name="sub5"> 
</td>
</td>

<td>
<td>
Sub 5 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub5-markobtained"> 
</td>
</td>
<td>
<td>
Sub 5 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub5-totalmark"> 
</td>
</td>
</tr>


<tr>
<td>
<td>
Sub 6 Name
</td>
<td>
<input type="name" class="form-control" name="sub6"> 
</td>
</td>

<td>
<td>
Sub 6 Mark Obtained
</td>
<td>
<input type="name" class="form-control" name="sub6-markobtained"> 
</td>
</td>
<td>
<td>
Sub 6 Total Mark
</td>
<td>
<input type="name" class="form-control" name="sub6-totalmark"> 
</td>
</td>
</tr>

    
    </table>
    <button class="btn btn-success" type="submit" name="marklist" >Generate Marklist</button>
    </form>

</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_GET['marklist']))

{



function Findaverage($sub, $tm)
    {
        
      
        $per=($sub/$tm)*100;
        return $per;
    }

    function FindStatus($g1, $g2, $g3, $g4, $g5, $g6)
    {

        if($g1=='F'||$g2=='F'||$g3=='F'||$g4=='F'||$g5=='F'||$g6=='F')
        {
            return "Failed";
        }
        else
        {
            return "Passed";
        }
    }
  
    function Findgrade($p)
    {
        if($p>=95)
        {
            $g='S';
        }
        else if($p>=90)
        {
            $g='A+';
        }
        else if($p>=85)
        {
           $g='A';
        }
        else if($p>=80)
        {
           $g='B+';
        }
        else if($p>=75)
        {
           $g='B';
        }
        else if($p>=70)
        {
           $g='C+';
        }
        else if($p>=65)
        {
           $g='C';
        }
        else if($p>=60)
        {
           $g='D+';
        }
        else if($p>=55)
        {
           $g='D';
        }
        else if($p>=50)
        {
           $g='E';
        }
        else if($p<50)
        {
           $g='F';
        }

        return $g;
    }


    $name=$_GET['name'];
    $candidatecode=$_GET['candidatecode'];
    $examcode=$_GET['examcode'];
    $semester=$_GET['semester'];
    $sub1=$_GET['sub1'];
    $sub1_mark1=$_GET['sub1-markobtained'];
    $sub1_totalmark=$_GET['sub1-totalmark'];

    $sub2=$_GET['sub2'];
    $sub2_mark2=$_GET['sub2-markobtained'];
    $sub2_totalmark=$_GET['sub2-totalmark'];

    $sub3=$_GET['sub3'];
    $sub3_mark3=$_GET['sub3-markobtained'];
    $sub3_totalmark=$_GET['sub3-totalmark'];

    $sub4=$_GET['sub4'];
    $sub4_mark4=$_GET['sub4-markobtained'];
    $sub4_totalmark=$_GET['sub4-totalmark'];

    $sub5=$_GET['sub5'];
    $sub5_mark5=$_GET['sub5-markobtained'];
    $sub5_totalmark=$_GET['sub5-totalmark'];

    $sub6=$_GET['sub6'];
    $sub6_mark6=$_GET['sub6-markobtained'];
    $sub6_totalmark=$_GET['sub6-totalmark'];


    

$p1=Findaverage($sub1_mark1,$sub1_totalmark);
$p2=Findaverage($sub2_mark2,$sub2_totalmark);
$p3=Findaverage($sub3_mark3,$sub3_totalmark);
$p4=Findaverage($sub4_mark4,$sub4_totalmark);
$p5=Findaverage($sub5_mark5,$sub5_totalmark);
$p6=Findaverage($sub6_mark6,$sub6_totalmark);


$g1=Findgrade($p1);
$g2=Findgrade($p2);
$g3=Findgrade($p3);
$g4=Findgrade($p4);
$g5=Findgrade($p5);
$g6=Findgrade($p6);

$Status=FindStatus($g1,$g2,$g3,$g4,$g5,$g6);




    echo "<table class='table'> ";
    echo "<tr> <td> Name :  </td>   <td>  $name  </td>   </tr>";
    echo "<br>";
    echo "<tr> <td> Candidate Code :  </td>   <td>  $candidatecode  </td>   </tr>";
    echo "<br>";
    echo "<tr> <td> Exam Code :  </td>   <td>  $examcode  </td>   </tr>";
    echo "<br>";
    echo "<tr> <td> Semester :  </td>   <td>  $semester  </td>   </tr>";
    echo "<br>";
    echo "</table>";


    echo "<table class='table'> ";
    echo "<tr> <td> Subject Name  </td>   <td>  Mark Obtained  </td> <td> Total Mark </td>  <td>Grade  </td>  </tr>";
    echo "<tr> <td> $sub1  </td>   <td>  $sub1_mark1  </td> <td> $sub1_totalmark </td>  <td>$g1  </td>  </tr>";
    echo "<tr> <td> $sub2  </td>   <td>  $sub2_mark2  </td> <td> $sub2_totalmark </td>  <td>$g2  </td>  </tr>";
    echo "<tr> <td> $sub3  </td>   <td>  $sub3_mark3  </td> <td> $sub3_totalmark </td>  <td>$g3  </td>  </tr>";
    echo "<tr> <td> $sub4  </td>   <td>  $sub4_mark4  </td> <td> $sub4_totalmark </td>  <td>$g4  </td>  </tr>";
    echo "<tr> <td> $sub5  </td>   <td>  $sub5_mark5  </td> <td> $sub5_totalmark </td>  <td>$g5  </td>  </tr>";
    echo "<tr> <td> $sub6  </td>   <td>  $sub6_mark6  </td> <td> $sub6_totalmark </td>  <td>$g6  </td>  </tr>";


    echo "</table>";



echo $Status ;

}

?>