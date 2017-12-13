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

			if (isset($_GET['del_id'])) { 
			    $sql = mysql_query('DELETE FROM product WHERE idProduct = '.$_GET['del_id']);    }

			if (isset($_GET['red_id'])) { 
			    if (isset($_POST['name'])) {
			        $sql = mysql_query('UPDATE product SET model = "'.$_POST['model'].'", idProvider = "'.$_POST['idProvider'].'", Amount = "'.$_POST['Amount'].'",  Price = "'.$_POST['Price'].'" ,  mark = "'.$_POST['mark'].'" WHERE idProduct = '.$_GET['red_id']);
			    }
			}
			   
			?>
			<div class="container">
			<div class="col-md-12">
			    <div class="panel panel-default">
			                <div class="panel-heading"> 
			         
			                
			<h2>Браслеты</h2>
			<table class="table table-striped table-hover">
			<tr>
			<td style="width: 200px">Название</td>
			<td style="width: 100px">Цена</td>
			<!-- <td style="width: 200px">Производитель</td> -->
			<td style="width: 100px">Поставщик</td>
			<td style="width: 100px">Количество</td>
			<td></td>
			
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
			$sql = mysql_query("SELECT product.idProduct, product.model, product.price, product.idProvider, product.Amount FROM product, ProductCategoryr WHERE product.idProduct = ProductCategoryr.idProduct AND ProductCategoryr.idCategory = 10", $link);
			while ($result = mysql_fetch_array($sql)) {
			//echo "$result[6]";
			echo     '<tr><td>'.$result[1].'</td>'.
			         '<td>'.$result[2].'</td>'.
					 '<td>'.$result[3].'</td>'. 
			         '<td>'.$result[4].'</td>'.
					 
					 //'<td>'.$result[6].'</td>'.
			         '<td style="width: 100px"><a href="?del_id='.$result[0].'">Удалить</a></td>'.
			         '<td style="width: 100px"><a href="?red_id='.$result[0].'">Редактировать</a></td></tr>';
			}
			?>
			</table>
			<h2>Каучук</h2>
			<table class="table table-striped table-hover">
			<tr>
			<td style="width: 200px">Название</td>
			<td style="width: 100px">Цена</td>
			
			<td style="width: 100px">Поставщик</td>
			<td style="width: 100px">Количество</td>
			<td></td>
			
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
			$sql = mysql_query("SELECT product.idProduct, product.model, product.price, product.idProvider, product.Amount FROM product, ProductCategoryr WHERE product.idProduct = ProductCategoryr.idProduct AND ProductCategoryr.idCategory = 11", $link);
			while ($result = mysql_fetch_array($sql)) {
			 //echo "Blancpain";
			echo     '<tr><td>'.$result[1].'</td>'.
			         '<td>'.$result[2].'</td>'.
					 '<td>'.$result[3].'</td>'. 
			         '<td>'.$result[4].'</td>'.
					 '<td>'.$result[5].'</td>'.
			         '<td style="width: 100px"><a href="?del_id='.$result[0].'">Удалить</a></td>'.
			         '<td style="width: 100px"><a href="?red_id='.$result[0].'">Редактировать</a></td></tr>';
			}
			?>
			</table>
			

			<?php
			if (isset($_GET['red_id'])) { 
			            $sql = mysql_query("SELECT *  FROM product where idProduct=".$_GET['red_id'], $link); //запрос к БД
			    $result = mysql_fetch_array($sql);        
			    
			    ?>
			<table class="table table-striped table-hover">
			<form action="" method="post">
			<tr>
			    <td>Название:</td>
			    <td><input type="text" name="model" value="<?php echo ($result['model']); ?>"></td>
			</tr>
			<tr>
			    <td>Поставщик:</td>
			    <td><input type="text" name="idProvider" value="<?php echo ($result['idProvider']); ?>"></td>
			</tr>
			<tr>
			    <td>Количество:</td>
			    <td><input type="text" name="Amount" value="<?php echo ($result['Amount']); ?>"></td>
			</tr>
			<tr>
			    <td>Цена:</td>
			    <td><input type="number" name="Price"  value="<?php echo ($result['Price']); ?>"></td>
			</tr>
			<tr>
			    <td>Производитель:</td>
			    <td><input type="text" name="mark" value="<?php echo ($result['mark']); ?>"></td>
			</tr>
			

			<tr>
			    <td colspan="2"><input type="submit" value="Редактировать"></td>
			</tr>
			</form>
			</table>
			    <?php
			}
			?>
			<br>

			<table class="table table-striped table-hover">
			<form action="../addProduct.php" method="post">
			<tr>
			    <td>id:</td>
			    <td><input type="text" name="id"></td>
			</tr>
			<tr>
			    <td>Название:</td>
			    <td><input type="text" name="model"></td>
			</tr>
			<tr>
			    <td>Поставщик:</td>
			    <td><input type="text" name="idProvider"></td>
			</tr>
			<tr>
			    <td>Количество:</td>
			    <td><input type="text" name="amount"></td>
			</tr>
			<tr>
			    <td>Цена:</td>
			    <td><input type="number" name="price"></td>
			</tr>
			<tr>
			    <td>Производитель:</td>
			    <td><input type="text" name="mark"></td>
			</tr>
			<tr>
			    <td>Man/Female:</td>
			    <td><input type="text" name="sex"></td>
			</tr>
			<tr>
			    <td>Type of mechanism (Kvarc/Mech):</td>
			    <td><input type="text" name="mech"></td>
			</tr>
			<tr>
			    <td>Type of belt (Brasl/Kauch):</td>
			    <td><input type="text" name="belt"></td>
			</tr>
			<tr>
			    <td colspan="2"><input type="submit" value="Add" name="add"></td>
			</tr>

			</form>
			</table>

			</div>	
	
</body>
</html>