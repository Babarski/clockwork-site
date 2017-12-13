<?php
session_start();

if (!mysql_connect('localhost', 'root', '')) die("Error connection");
if (!mysql_select_db('clocwork')) die ("Error database");

$pr = $_SESSION['allProductInBasket'];
for ($i=0; $i < count($pr); $i++) { 
	mysql_query('INSERT INTO Purchase (`idPurchase`, `idUser`, `idProduct`, `Amount`) VALUES("0", '.$_SESSION['id'].' , '.$pr[$i][0].','.$pr[$i][1].' )');
}
	
header("Location: ../cabUser.php");
?>