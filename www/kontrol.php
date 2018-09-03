<!DOCTYPE html>
<?php 
function connect($host,$user,$pass,$dbname) {
	$db = mysqli_connect($host,$user,$pass,$dbname);
	if(mysqli_connect_error($db)) { 
		exit('Connect Error:' . mysqli_connect_error($db));
	}
	return $db;
}
mysql_query('SET NAMES utf8');
$db = connect("localhost","root","","praktika");
?>

<html>
<meta charset="utf-8" /> <html lang="ru">
<head>

     <?php 
	 $title = "Справочники";
	        require_once "blocks/head.php";
	 ?>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	    <div id="l">
	   <a href="/kontrolvh.php">Выйти из преподавателя</a></div>
	        <div id="tehn">
			
			 <select size='1' class="tip_progr">
			 <option value="0"> --Выбрать тип программы-- </option>
			 <?php
			 $query = $db->query("SELECT * FROM `tip_progr`");
			 while ($row = mysqli_fetch_object($query)){
			 echo "<option value='($row->id_tip_progr)'>".$row->tip_progr."</option>";
			 }
			 ?>
			 </select>


			
	        </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
	
</body>
</html>