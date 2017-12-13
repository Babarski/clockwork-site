<?php
	if(!mysql_connect('localhost', 'root', '')) die("Error connection");
    if(!mysql_select_db('clocwork')) die ("Error database");
    
    function query($q){
    $res = mysql_query($q);
        while($r = mysql_fetch_assoc($res)) {
            $arr[] = $r;
        }
        return $arr;
    }
    function insert($q){
        mysql_query($q);
    }

    function add_category($a, $id){
        $result = mysql_query("SELECT idCategory FROM Categoryr WHERE Categoryr.Name = '$a'");
        
        while($row = mysql_fetch_array($result)){
           $res = $row['idCategory'];
        }
        
        insert("INSERT INTO ProductCategoryr (`idProductCategory`,`idCategory`,`idProduct`) VALUES ('0', '$res', '$id')");
        
    }


    $id = $_POST['id'];
    $model = $_POST['model'];
    $idProvider = $_POST['idProvider'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
	$mark = $_POST['mark'];
	$sex = $_POST['sex'];
	$mech = $_POST['mech'];
	$belt = $_POST['belt'];
	
	insert("INSERT INTO product (`idProduct`,`model`,`idProvider`,`Amount`,`Price`,`mark`,`Image`) VALUES ('$id', '$model', '$idProvider', '$amount', '$price','$mark', 'hey' )");
	
    add_category($sex, $id);
    add_category($mark, $id);
    add_category($mech, $id);
    add_category($belt, $id);
    
	header("Location: editProduct.php")

?>