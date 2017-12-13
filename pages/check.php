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

    $login = $_POST['login'];
    $birthday = $_POST['birthday'];
    $name = $_POST['name'];
    $psw = $_POST['pass'];
	$email = $_POST['email'];
	

    $arr = query("select * from user 
                    where login = '$login' 
                    ");
    
    if(!is_null($arr)) {

        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Ошибка</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
        </head>
        <body>
        <div class="alert alert-danger">
            <strong>Ошибка!</strong> Такой логин уже существует
        </div>
        <a class="btn btn-default" href="login.html">Вернуться назад</a>
        </body>
        </html>
<?php
return;
    } 
    else 
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../dhtmlx/dhtmlxSuite/codebase/dhtmlx.css"/> 
	<link rel="stylesheet" type="text/css" href="../../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="pages.css"/>
	<link rel="stylesheet" href="../../css/bootstrap/bootstrap-grid-3.3.1.min.css" />	
	<script type="text/javascript" src="../../dhtmlx/dhtmlxSuite/codebase/dhtmlx.js"></script>
	<script type="text/javascript" src="../../scripts/script.js"></script>
</head>
<body>
	<div id = "main_header">
		<img class="header_img" src="../../src/images/Clockwork.png">
		<img src="../../src/images/contact.jpg" style="text-align: right;">
	</div>
	<div class="main_menu">
		<ul>
		<li><div id="txt"></div></li>
		<li class="active"><a href="#">ГЛАВНАЯ</a></li>
			<li><a href="#">АКЦИИ</a></li>
			<li><a href="#">О НАС</a></li>
			<li><a href="#">НОВИНКИ</a></li>
			<li><a href="#">ПОДАРКИ</a></li>
			<li><a href="#">ДУБЛИКАТЫ</a></li>
			<li><input class="login_input" type="text" name="login" placeholder=" Логин"></li>
			<li><input class="login_input" type="text" name="pass" placeholder=" Пароль"></li>
			<li><a id ="login" href="#">ВХОД</a></li>
			<li><a id ="login" href="/pages/reg.html">РЕГИСТРАЦИЯ</a></li>
		</ul>
	</div>
	<h1 style="text-align:center;">Объект navigator</h1>
	<table>
		<tr>
		<th style="margin-right: 10px">Название браузера</th>
		<th>Разрешение использовать cookie</th>
		<th>Язык браузера</th>
		</tr>
		<tr>
		<script type="text/javascript">	
		var browser, uAgent = navigator.userAgent;
		var language, uLan = navigator.language;
		if(uAgent.indexOf("Chrome") > -1) {
			browser = "<td>Google Chrome</td>";
		} else if (uAgent.indexOf("Safari") > -1) {
			browser = "<td>Apple Safari</td>";
		} else if (uAgent.indexOf("Opera") > -1) {
			browser = "<td>Opera</td>";
		} else if (uAgent.indexOf("Firefox") > -1) {
			browser = "<td>Mozilla Firefox</tdh>";
		} else if (uAgent.indexOf("MSIE") > -1) {
			browser = "<td>Microsoft Internet Explorer</td>";
		}
		document.write(browser);
		if (navigator.cookieEnabled)
		document.write("<td>Поддержка cookie включена</td>");
		else
		document.write("<td>Поддержка cookie отключена</tdh>");

		if(uLan=='ru') {
			language = "<td>Русский</td>";
		} else if (uLan=='en') {
			language = "<td>Английский</td>";
		} else if (uLan=='ua') {
			language = "<td>Украинский</td>";
		}
		document.write(language);
		</script></tr>
	</table>
	<h1 style="text-align:center;">Объект location</h1>
	<table>
		<tr>
		<th>Имя хоста</th>
		<th>Протокол</th>
		</tr><tr>
		<script type="text/javascript">	
		var host=location.hostname;
		var pro=location.protocol;		
		document.write("<td>"+host+ "</td>");
		document.write("<td>"+pro+ "</td>");
		</script></tr>
	</table>
	<h1 style="text-align:center;">Объект history</h1>
	<table>
		<tr>
		<th>Ссылка на следующую страницу</th>
		<th>Количество адресов в истории</th>		
		</tr>
		<tr></tr>
		<td><a href='javascript: history.go(1);' type="submit" class="btn btn-default" style="
			display: inline;
			background:  #3399cc;
			border: medium none;
			border-radius: 0;
			color: #FFFFFF;
			font-family: 'Roboto', sans-serif;
		   vertical-align: initial;		   
		">Проверить</a></td>
		<script type="text/javascript">	
		var l=history.length;
		document.write("<td>"+l+ "</td>");
		</script>
	</table>
	<h1 style="text-align:center;">Объект screen</h1>
	<table>
		<tr>
		<th>Высота экрана</th>
		<th>Ширина экрана</th>
		</tr><tr>
		<script type="text/javascript">			
		var height=window.outerHeight;
		var width=window.outerWidth;		
		document.write("<td>"+height+ " px"+"</td>");
		document.write("<td>"+width+" px"+"</td>");
		</script></tr>
	</table>
</body>
</html>
 <?php
    insert("INSERT INTO `User` (`idUser`, `Name`, `dateOfBirth`, `email`, `password`, `login`) VALUES ('0', '$name', '$birthday', '$email', '$psw', '$login')");
    ?>