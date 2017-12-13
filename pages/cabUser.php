<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clockwork</title>
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
			<li><div id="txt"></div>	</li> 
			<li class="active"><a href="#">ГЛАВНАЯ</a></li>
				<li><a href="#">АКЦИИ</a></li>
				<li><a href="#">О НАС</a></li>
				<li><a href="#">НОВИНКИ</a></li>
				<li><a href="#">ПОДАРКИ</a></li>
				<li><a href="#">ДУБЛИКАТЫ</a></li>
				<li>
					<form action = 'enter.php' method="post">
				<input class="login_input" type="text" name="login" placeholder=" Логин"></li>
				<input class="login_input" type="text" name="pass" placeholder=" Пароль"></li>
				<input type="submit" value="ВXOД" name="enter" style="
		background-color: #3399cc;
      color: #fff;
      border:none;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
      font-size: 1vw;">
					</form>
				</li>
				<li><a id ="login" href="/pages/reg.html">РЕГИСТРАЦИЯ</a></li>
			</ul>
		</div>	



		<div class="main_page">
			
			<a href="productsForUser/groupBrand.php" style="display: inline-block; margin: 20px;">Brand group</a>
			<b></b>
			<a href="productsForUser/groupMech.php" style="display: inline-block;margin: 20px;">Mechanism group</a>
			</b>
			<a href="productsForUser/groupModel.php" style="display: inline-block;margin: 20px;">Model group</a>
			</b>
			<a href="productsForUser/groupRem.php" style="display: inline-block;margin: 20px;">Belt group</a>
		</div>	
	
</body>
</html>