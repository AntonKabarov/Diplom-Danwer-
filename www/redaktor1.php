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
	 $title = "Редактор БД";
	        require_once "blocks/head.php";
	 ?>
</head>



<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	        <div id="mesto">
			
			
			<?php 

$result=mysql_query("SELECT `FIO`, `tip_progr` FROM `osnovnai` "); 

//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 

//узнаем, сколько в массиве $result строчек 
$n=mysql_num_rows($result); 

//вывод на страничку в виде таблицы 
echo "<table border=1> 
<tr><th>FIO</th><th>gruppa</th><th>tip_progr</th><th>special</th></tr>"; 

//вывод построчно 
for($i=0;$i<$n;$i++) 
 echo  
"<tr><td>",mysql_result($result,$i,FIO), 
"</td><td>",mysql_result($result,$i,gruppa), 
"</td><td>",mysql_result($result,$i,tip_progr), 
"</td><td>",mysql_result($result,$i,special), 
"</td></tr>"; 
echo "</table>"; 

?> 
			
			
	        </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
	
</body>
</html>