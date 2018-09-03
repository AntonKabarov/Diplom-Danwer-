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
	 $title = "Технология написания картин";
	        require_once "blocks/head.php";
	 ?>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	   <p>ВТМ-25Д </p>
	        <div id="tehn">
		
			<?php 

$_result=mysql_query("SELECT `osnovnai`.`FIO`, `special`.`name_special` FROM `osnovnai` JOIN `special`
ON `osnovnai`.`id_special`=`special`.`id_special` WHERE id_gruppa=0  ");


//$result3=mysql_query("SELECT `tip_progr`.`tip_progr` FROM `tip_progr`");

$_result3=mysql_query("SELECT  `osnovnai`.`FIO` , `osnovnai`.`ocenka`
FROM  `osnovnai` ");

$_result4=mysql_query("SELECT  `osnovnai`.`FIO` ,  `data_sdachi`.`data_sdachi` 
FROM  `osnovnai` JOIN `data_sdachi`
ON `osnovnai`.`data_sdachi`=`data_sdachi`.`id_data_sdachi` WHERE id_gruppa=0 ");

//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 
//узнаем, сколько в массиве $result строчек 

$n2=mysql_num_rows($_result); 


//вывод на страничку в виде таблицы 
echo "<table id='table2' border=1> 
<tr><th>ФИО</th><th>Оценка</th><th>Дата сдачи</th></tr>";
//вывод построчно 
for($i=0;$i<$n2;$i++) 
 echo  
"<tr contenteditable='true'><td>",mysql_result($_result,$i,FIO),
//"</td><td>",mysql_result($_result2,$i,gruppa), 
"</td><td>",mysql_result($_result3,$i,ocenka), 
"</td><td>",mysql_result($_result4,$i,data_sdachi), 

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