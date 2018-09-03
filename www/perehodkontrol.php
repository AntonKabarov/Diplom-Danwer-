<!DOCTYPE html>
<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'praktika');

if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
    exit('Cannot connect to server');
}
if (!mysql_select_db(DB_NAME)) {
    exit('Cannot select database');
}

mysql_query('SET NAMES utf8');
?>
<html>
<head>

     <?php 
	 $title = "Справочники";
	        require_once "blocks/head.php";
	 ?>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	   <a href="adminkontrol.php">  
		<div class="bu">Войти как преподаватель</div></a>
	        <div id="tehn">
			
			 


			
	        </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
	
</body>
</html>