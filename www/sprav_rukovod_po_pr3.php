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
<p10><?php 
$result=mysql_query("SELECT `rukovod_predpr`, `id_doljnost`, `rab_telefon` FROM `rukovod_pr_na_predpr` WHERE `id_predpr`='3' ORDER BY `rukovod_predpr`  ");
//вывод должности
$result2=mysql_query("SELECT  `rukovod_pr_na_predpr`.`rukovod_predpr` ,  `doljnost`.`doljnost` FROM  `rukovod_pr_na_predpr` 
JOIN  `doljnost` ON  `rukovod_pr_na_predpr`.`id_doljnost` =  `doljnost`.`id` WHERE `id_predpr`='3' ORDER BY `rukovod_predpr`");

$result3=mysql_query("SELECT  `rukovod_pr_na_predpr`.`rukovod_predpr` ,  `predpr`.`predpr` FROM  `rukovod_pr_na_predpr` 
JOIN  `predpr` ON  `rukovod_pr_na_predpr`.`id_predpr` =  `predpr`.`id_predpr` WHERE `predpr`='ООО НПО Саров-Волгогаз' ORDER BY `rukovod_predpr`");
//$result2=mysql_query("SELECT  `osnovnai`.`FIO` ,  `gruppa`.`gruppa` 
//FROM  `osnovnai` 
//JOIN  `gruppa` ON  `osnovnai`.`id_gruppa` =  `gruppa`.`id_gruppa` 
//WHERE  `gruppa`.`gruppa` =  'ВТМ-25Д' ");

//узнаем, сколько в массиве $result строчек 
$n=mysql_num_rows($result); 

//вывод на страничку в виде таблицы 
echo "<table id='table1' border=1> 
<tr><th>Руководитель</th><th>Предприятие</th><th>Должность</th><th>Телефон</th></tr>"; 
//вывод построчно 
for($i=0;$i<$n;$i++) 
 echo  
"<tr><td>",mysql_result($result,$i,rukovod_predpr),
"</td><td>",mysql_result($result3,$i,predpr),
"</td><td>",mysql_result($result2,$i,doljnost), 
"</td><td>",mysql_result($result,$i,rab_telefon),  
"</td></tr>"; 
echo "</table>"; 
?> </p10>

			</div>	
			
	   </div>
	</div>   
	 <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

	</body>
</html>