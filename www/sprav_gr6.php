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
<!DOCTYPE html>
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

	        <div id="gal">
					<div class="item">	 
<p2>
<?php	$result=mysql_query("SELECT `FIO`, `id_gruppa`, `telefon` FROM `osnovnai` WHERE `id_gruppa`='6' ORDER BY `FIO`"); 

//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 

//узнаем, сколько в массиве $result строчек 
$n=mysql_num_rows($result); 

//вывод на страничку в виде таблицы 
echo "<table class='demotable' border=1> <thead>
<tr><th>ВТМ-16Д</th><th>Телефон</th></tr>"; 

//вывод построчно 
for($i=0;$i<$n;$i++) 
 echo 
"<tbody><tr>
		<td>",mysql_result($result,$i,FIO),
"</td><td>",mysql_result($result,$i,telefon), 		
"</td></tr><tfoot>"; 
echo "</table>"; 

?> </p2>

			</div>	
			
	   </div>
	</div>   
	 <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

	</body>
</html>