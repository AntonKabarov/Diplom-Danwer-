<?php 
require "functions/functions.php";
$db = connect("localhost","root","","praktika");
//$data = get_predpr($db);

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
     <?php 
	 $title = "Выбор диаграммы";
	        require_once "blocks/head.php";
	 ?>
	 <script>
	 </script>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	        <div id="txt">
			
   <form action="#" method="get">
 <li>Учебный год:<br />
   <select name="id_god" id="id_god" >
    <option value="0">- Выберите учебный год -</option>
    <option value="1">2015-2016</option>
    <option value="2">2016-2017</option>
   </select></li>
   
 <li>Тип программы:<br />
<select name="tip_progr" id="tip_progr"  >
    <option value="00">- Выберите тип программы -</option>
	<option value="0">Бакалавр</option>
    <option value="1">Магистр</option>
   </select></li>

    <li>Тип практики:<br />
   <select name="praktik" id="praktik"  >
    <option value="00">- Выберите тип практики -</option>
	<option value="0">Учебная</option>
    <option value="1">Производственная</option>
	<option value="2">Преддипломная</option>
   </select></li>
   
    <li>Группа:<br />
   <select name="gruppa" id="gruppa" disabled="disabled" >
    <option value="0">- Выберите группу -</option>
   </select></li>
   </form>

	 
		<a href="/diagram.php">			 
			   <div class="but">Построить диаграмму</div></a>
		</a>
	         </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
</body>
</html>