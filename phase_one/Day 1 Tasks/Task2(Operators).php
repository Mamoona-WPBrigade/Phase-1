<!DOCTYPE html>
<html>
<head>
<title>Day 1 Tasks</title>
</head>
<body>
<?php
//Part Two
$a = 2;
$b = 5;
$c = 10;  
$d = 20;
$x = 100;  
$y = "100";
//Arithmetic Operators: Addition,  Division, Modulus, Exponentiation
echo"<h5>Arithmetic Operators</h5>";
echo"Addition =".$a+$b;
echo"<br>Division =".$b/$a;
echo"<br>Modulus =".$b%$a;
echo"<br>Exponention=".$a**$b;

//Increment / Decrement Operators: ++$x, 
echo"<h5> Increment/Decrement Operators</h5>";
print "Increment =".++$a;
print "<br>Decrement =".--$b;

// Assignment Operators: x += y , x *= y , x %= y , x.= y
echo"<h5> Assignment Operators</h5>";
echo $a += $b;
echo"<br>";
echo $a += $b;
echo"<br>";
echo $a *= $b;
echo"<br>";
echo $a %= $b;
echo"<br>";
echo $a.= $b;

//Comparison Operators:  ==, ===, !=, !==, <=
echo"<h5> Comparisson Operators</h5>";
var_dump ($x == $y);echo"<br>";
var_dump($x === $y);echo"<br>";
var_dump($x != $y);echo"<br>";
var_dump($x !== $y);echo"<br>";
var_dump($x <= $y);

//Logical Operators: And, Or, Xor, Not
echo"<h5> Logical Operators</h5>";
if ($c == 10 and $d == 20) 
    echo "Statement is True";
else
	echo "Statement is False";

if ($c == 20 or $d == 30)
    echo "<br>Statement is True";
else
	echo "<br>Statement is False";

if ($c == 10 xor $d == 20) 
    echo "<br>Statement is True";

else
	echo "<br>Statement is False";

if ($c !== 20 and $d !== 30)
    echo "<br>Statement is True";

else
	echo "<br>Statement is False";
?>
</body>
</html>