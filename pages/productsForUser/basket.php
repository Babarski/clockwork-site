<?php
	session_start();

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

		<div class="main_page">
		<h2>Basket</h2>
<?php

			$host="localhost";    
			$user="root";        
			$pass="";             
			$db_name="clocwork";    
			$link=mysql_connect($host,$user,$pass); 
			mysql_select_db($db_name,$link);    

			$arr = $_SESSION['productArray'];
			
			$allProductInBasket=[];
			$IdAmount = [];	
			for($i = 0; $i < count($arr); $i++){
				$isExist = FALSE;
				//echo "array[i] = ".$arr[$i]."</br>";

				for($j = 0; $j <= count($allProductInBasket); $j++){
					
					//echo "allProductInBasket[j] = ".$allProductInBasket[$j][0]."</br>";
					if($arr[$i] == $allProductInBasket[$j][0]){
						$isExist = TRUE;
						$allProductInBasket[$j][1]++;
					}
				}

				if($isExist == FALSE){
					$IdAmount= array($arr[$i], 1);
					$allProductInBasket[] = $IdAmount;
				}

			}


			if (isset($_GET['del'])) { 

				for ($i=0; $i < count($arr); $i++) { 
					if($arr[$i] == $_GET['del']){
						unset($arr[$i]);
						//$_SESSION['productArray'] = $arr;
					}
				}

				for ($i=0; $i < count($allProductInBasket); $i++) { 

					if($allProductInBasket[$i][0] == $_GET['del']){

						if($allProductInBasket[$i][1] > 1){
							$allProductInBasket[$i][1]--;

						}
						else {
							unset($allProductInBasket[$i]);
						}
											
					}

				}
				
			    
			}
			
?>
			<table class="table table-striped table-hover">
			<tr>
			<td style="width: 200px">Название</td>
			<td style="width: 100px">Цена</td>
			<td style="width: 100px">Количество</td>
			<td></td>
			
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
				foreach ($allProductInBasket as $key => $value) {
				//echo $allProductInBasket[$key][1];
			}$sum = 0;
				for($i = 0; $i < count($allProductInBasket); $i++){
					//echo $allProductInBasket[$i][0];
					
					 $pr = $allProductInBasket[$i][0];
					 $am = $allProductInBasket[$i][1];
					 $sql = mysql_query("SELECT product.idProduct, product.model, product.price, product.Image FROM product WHERE product.idProduct = '$pr'", $link);
					 while ($result = mysql_fetch_array($sql)) {
					//echo "$result[3]";
					 	$sum += ($result[2]*$am) ;
					echo     '<tr><td>'.$result[1].'</td>'.
					         '<td>'.$result[2].'</td>'.
							  '<td>'.$am.'</td>'.
							  '<td style="width: 100px"><a href="?del='.$result[0].'">Удалить</a></td></tr>';


					 }
				
				}
				$_SESSION['allProductInBasket'] = $allProductInBasket;
			?>
			</table>
			<form action="purchase.php">
				<h3>Вы взяли товара на сумму - <?php echo $sum?></h3>
				<input type="submit" name="purchase" value="Оплатить" ><!-- onclick="alert('Спасибо за покупку')" -->
			</form>
		</div>	