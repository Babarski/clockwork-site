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

			    $sql = mysql_query('DELETE FROM user WHERE idUser = '.$_GET['del_id']);    
			}

			if (isset($_GET['red_id'])) { 
			    if (isset($_POST['name'])) {
			        $sql = mysql_query('UPDATE user SET name = "'.$_POST['name'].'", login = "'.$_POST['login'].'", password = "'.$_POST['password'].'", email = "'.$_POST['email'].'" WHERE idUser = '.$_GET['red_id']);
			    }
			}
			?>
			<div class="container">
			<div class="col-md-12">
			    <div class="panel panel-default">
			                <div class="panel-heading"> 
			<table class="table table-striped table-hover">
			<tr>
			<td>Имя</td>
			<td>Дата рождения</td>
			<td>Email</td>
			<td>Пароль</td>
			<td>Логин</td>

			<td></td>
			<td><a href="../../index.html" size="5" color="red">Вернуться назад</a></td>
			</tr>
			  </div>
			    </div>
			</div>
			    </div>
			<?php
			$sql = mysql_query("SELECT * FROM user", $link);
			while ($result = mysql_fetch_array($sql)) {
			echo     '<tr><td>'.$result[1].'</td>'.
			         '<td>'.$result[2].'</td>'.
					 '<td>'.$result[3].'</td>'.
			         '<td>'.$result[4].'</td>'.
			         '<td>'.$result[5].'</td>'.
					 
			         '<td><a href="?del_id='.$result[0].'">Удалить</a></td>'.
			         '<td><a href="?red_id='.$result[0].'">Редактировать</a></td></tr>';

			}
			?>
			</table>
			</table>

			<?php
			if (isset($_GET['red_id'])) { 
			    //Достаем запсись из БД

			    $sql = mysql_query("SELECT *  FROM user WHERE idUser=".$_GET['red_id'], $link);  
			     
			    $result = mysql_fetch_array($sql); 
			    
			    ?>
			<table class="table table-striped table-hover">
			<form action="" method="post">
			<tr>
			    <td>Имя:</td>
			    <td><input type="text" name="name" value="<?php echo ($result['Name']); ?>"></td>
			</tr>
			<tr>
			    <td>Логин:</td>
			    <td><input type="text" name="login"  value="<?php echo ($result['login']); ?>"></td>
			</tr>

			<tr>
			    <td>Пароль:</td>
			    <td><input type="text" name="password"  value="<?php echo ($result['password']); ?>"></td>
			</tr>
			<tr>
			    <td>Email:</td>
			    <td><input type="text" name="email"  value="<?php echo ($result['email']); ?>"></td>
			</tr>
			<tr>
			    <td>Дата рождения:</td>
			    <td><input type="text" name="birthday"  value="<?php echo ($result['dateOfBirth']); ?>"></td>
			</tr>

			<tr>
			    <td colspan="2"><input type="submit" value="Редактировать"></td>
			</tr>
			</form>
			</table>
			    <?php
			}
			?>

			</div>	
	
</body>
</html>