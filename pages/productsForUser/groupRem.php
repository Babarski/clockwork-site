<?php session_start(); ?>
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
				<li><a href="../../index.html">АКЦИИ</a></li>
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
      font-size: 1vw;"">
					</form>
				</li>
				<li><a id ="login" href="/pages/reg.html">РЕГИСТРАЦИЯ</a></li>
			</ul>
		</div>	


<?php
			$host="localhost";    
			$user="root";        
			$pass="";             
			$db_name="clocwork";    
			$link=mysql_connect($host,$user,$pass); 
			mysql_select_db($db_name,$link);        
			$prod = $_SESSION['productArray'];

			if (isset($_GET['basket_add'])) { 

				$prod[]= $_GET['basket_add'];
				$_SESSION['productArray'] = $prod;
			    
			}
			   
			?>
			<div class="container">
			<div class="col-md-12">
			    <div class="panel panel-default">
			                <div class="panel-heading"> 
			         
			 <a href="basket.php">Basket</a>         
			<h2>Браслет</h2>
			<table class="table table-striped table-hover">
			<tr>
			<td style="width: 200px">Название</td>
			<td style="width: 100px">Цена</td>
			
			<td></td>
			
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
			$sql = mysql_query("SELECT product.idProduct, product.model, product.price, product.Image FROM product, ProductCategoryr WHERE product.idProduct = ProductCategoryr.idProduct AND ProductCategoryr.idCategory = 10", $link);
			while ($result = mysql_fetch_array($sql)) {
			//echo "$result[6]";
			echo     '<tr><td>'.$result[1].'</td>'.
			         '<td>'.$result[2].'</td>'.
					 '<td><img src='.$result[3].' style="width: 30%;></td>'.
			         '<td style="width: 100px"><a href="?basket_add='.$result[0].'">Добавить в корзину</a></td>';
			         
			}
			?>
			</table>
			<h2>Каучук</h2>
			<table class="table table-striped table-hover">
			<tr>
			<td style="width: 200px">Название</td>
			<td style="width: 100px">Цена</td>
			
			
			<td></td>
			
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
			$sql = mysql_query("SELECT product.idProduct, product.model, product.price, product.Image FROM product, ProductCategoryr WHERE product.idProduct = ProductCategoryr.idProduct AND ProductCategoryr.idCategory = 11", $link);
			while ($result = mysql_fetch_array($sql)) {
			//echo "$result[6]";
			echo     '<tr><td>'.$result[1].'</td>'.
			         '<td>'.$result[2].'</td>'.
					 '<td><img src='.$result[3].' style="width: 30%;></td>'.
					 
			         '<td style="width: 100px"><a href="?basket_add='.$result[0].'">Добавить в корзину</a></td>';
			         
			}
			?>
			</table>
			


			</div>	
	
</body>
</html>