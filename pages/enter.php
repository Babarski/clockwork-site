<?php
session_start();

if (!mysql_connect('localhost', 'root', '')) die("Error connection");
if (!mysql_select_db('clocwork')) die ("Error database");

function query($q)
{
    $res = mysql_query($q);
    while ($r = mysql_fetch_assoc($res)) {
        $arr[] = $r;
    }
    return $arr;
}

function query1($q1)
{
    $res1 = mysql_query($q1);
    while ($r1 = mysql_fetch_assoc($res1)) {
        $arr1[] = $r1;
    }
    return $arr1;
}


$login = $_POST['login'];
$psw = $_POST['pass'];

    $arr = query("select * from adminy
                where login = '$login'
                and password = '$psw'
    ");
	
	$arr1 = query1("select * from user
                where login = '$login'
                and password = '$psw'
    ");

    $lookForIdUser = mysql_query("select idUser from User
                where login = '$login'
                and password = '$psw'
    ");

    while($row = mysql_fetch_array($lookForIdUser)){
           $res = $row['idUser'];
        }

if(is_null($arr1)){
    if (is_null($arr)) {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
        <title> Ошибка доступа</title>

        </head>
        <body>
            <h2 style="text-align: center">Ошибка! Пароль или логин неверный</h2>

        </body>
        </html>
        <?php
        return;
    }
    else header("Location: cabAdmin.php");
}

else {
    
    //session_register('id', 'birth');
    $_SESSION['id'] = $res;
    $productArray=[];
    $_SESSION['productArray'] = $productArray;
    header("Location: cabUser.php");
}

?>
