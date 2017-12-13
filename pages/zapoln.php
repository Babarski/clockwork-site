<?php

$inc = 100;

$host="localhost";

$user="root";

$pass="";

$db_name="labor exchange";

$link=mysql_connect($host,$user,$pass);

mysql_select_db($db_name,$link);

$Date = array("2017.05.20", "2017.05.21", "2017.05.22");

function random_string($amount)

{

	$symbols = 'BACONYodnysitra';

	$number = strlen($symbols);

	$string = null;

	for ($i = 0; $i < $amount; $i++)

		{

		$string .= substr($symbols, rand(1, $number) - 1, 1);

		}

	return $string;

}

for ($i=0; $i < 5; $i++) {

	// $pass = random_string(8);

	// $login = random_string(5);

	$id = 0;

	$name = random_string(10);

	$sql = mysql_query( "INSERT INTO `Benefits` (`idBenefit`, `Name`) VALUES(".$id.", '".$name."')");

}

for ($i=10; $i < $inc; $i++) {

	$id = 0;
	$info = random_string(50);

	$name = random_string(10);

	$sql = mysql_query( "INSERT INTO `Courses` (`idCours`, `Name`, `Inform`) VALUES(".$id.", '".$name."', '".$info."')");

}

for ($i=10; $i < $inc; $i++) {
$id = 0;
	$info = random_string(50);

	$name = random_string(10);
	$addr = random_string(10);

	$sql = mysql_query( "INSERT INTO `Employers` (`idEmp`, `Name`, `Inform`, `Adress`) VALUES(".$id.", '".$name."', '".$info."', '".$addr."')");

}
for ($i=10; $i < $inc; $i++) {
$id = 0;
	$name = random_string(10);	

	$sql = mysql_query( "INSERT INTO `Speciality` (`idSpec`, `Name`) VALUES(".$id.", '".$name."')");

}

for ($i=10; $i < $inc; $i++) {
$id = 0;
	$name = random_string(10);	
	$surname = random_string(10);	
	$patr = random_string(10);	

	$serRec = random_string(10);	
	$id = rand(1,5);

	$sql = mysql_query( "INSERT INTO `Unemployed` (`idSpec`, `Name`, `Surname`, `Patronymic`, `Service_record`, `idBenefit`) VALUES(".$id.", '".$name."', '".$surname."', '".$patr."', '".$serRec."', '".$id."')");

}
for ($i=10; $i < $inc; $i++) {
$id = 0;
	$name = random_string(10);	
	$idEmp = rand(1,80);
	$idSpec = rand(1,80);
	$inform = random_string(100);

	$sql = mysql_query( "INSERT INTO `Vacancies` (`idVac`, `Name`, `idEmp`, `idSpec`, `Inform`) VALUES(".$id.", '".$name."', '".$idEmp."', '".$idSpec."', '".$inform."')");

}
for ($i=10; $i < $inc; $i++) {
$id = 0;
	$idUnp = rand(1,80);
	$idVac = rand(1,80);

	$sql = mysql_query( "INSERT INTO `Offers` (`idOff`, `idUnp`, `idVac`) VALUES(".$id.", '".$idUnp."', '".$idVac."')");

}
for ($i=10; $i < $inc; $i++) {
$id = 0;
	$idUnp = rand(1,80);
	$idCourse = rand(1,80);

	$sql = mysql_query( "INSERT INTO `coursUnemp` (`idCoursUnemp`, `idUnp`, `idCourse`) VALUES(".$id.", '".$idUnp."', '".$idCourse."')");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Hey
</body>
</html>