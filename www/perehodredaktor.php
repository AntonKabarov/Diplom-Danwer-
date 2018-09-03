
<!DOCTYPE html>
<html>
<head>
     <?php 
	 $title = "Редактор БД";
	        require_once "blocks/head.php";?>
</head>
<script>

</script>

<body>
   <?php require_once "blocks/header.php" ?>
   <?php require_once "config.php" ?>
	 
	<div id="wrapper">
	   <div id="leftCol">
	   <a href="adminredaktor.php">  
		<div class="bu">Войти как администратор</div></a>
	        <div id="mesto">
			
			
	        </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
	
</body>
</html>