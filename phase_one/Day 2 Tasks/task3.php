<!DOCTYPE html>
<html>
<head>
<title>Day 2 Tasks</title>
</head>
<body>
<?php
//Task 3
echo"<h3>Task 3</h3>"."<br><h4>Foreach and while loop</h4>";
echo"<b>Foreach Loop</b><br>";
$Subjects=array("Data Stucture","Data Base","Computer Networks","OOP");
$course['x'] = $Subjects[0];
$course['y'] = $Subjects[1];
$course['z'] = $Subjects[2];
Foreach($Subjects as $courses){
	echo $courses."<br>";	
}
Foreach($course as $key=>$value){
	echo $key."=".$value."<br>";
	
}
$x=0;
echo"<b>While Loop </b><br>";
while($x<count($Subjects)){
	echo $Subjects[$x]."<br>";
	++$x;	
}

?>
</body>