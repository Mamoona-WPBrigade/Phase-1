<!DOCTYPE html>
<html>
<head>
<title>Day 2 Tasks</title>
</head>
<body>
<?php
//Task Two
echo"<h3>Task 2</h3>"."<br><h4>Index Vs Associative Arrays</h4>";
echo"<b>Index Array </b><br>";
$Subjects=array("Data Stucture","Data Base","Computer Networks","OOP");
for($i=0;$i<count($Subjects);$i++){
	echo $Subjects[$i];
	echo"<br>";
}
echo"<b>Associative Array </b><br>";
$course['x'] = $Subjects[0];
$course['y'] = $Subjects[1];
$course['z'] = $Subjects[2];
echo "Mamoona has taken the ".$course['x']." course<br>";
echo "Hafsa has taken the ".$course['y']." course<br>";
echo "Misbha has taken the ".$course['z']." course<br>";
?>
</body>
</html>	