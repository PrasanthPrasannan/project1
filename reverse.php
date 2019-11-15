<?php
$a=1012;
$rev=0;
while($a>0)
{
$rem=$a%10;
$rev=($rev*10)+$rem;
 $a=intval($a/10);


}
echo $rev;
?>