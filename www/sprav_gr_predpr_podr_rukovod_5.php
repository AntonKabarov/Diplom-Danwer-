﻿<?php 
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

$_result=mysql_query("SELECT `osnovnai`.`FIO`, `special`.`name_special` FROM `osnovnai` JOIN `special`
ON `osnovnai`.`id_special`=`special`.`id_special` WHERE `id_gruppa`='5' ORDER BY `FIO` ");

$_result2=mysql_query("SELECT  `osnovnai`.`FIO` ,  `gruppa`.`gruppa` 
FROM  `osnovnai` 
JOIN  `gruppa` ON  `osnovnai`.`id_gruppa` =  `gruppa`.`id_gruppa` WHERE `gruppa`='ИТМ-16Д' ORDER BY `FIO` ");

$_result4=mysql_query("SELECT  `osnovnai`.`FIO` ,  `praktik`.`praktik` 
FROM  `osnovnai` 
JOIN  `praktik` ON  `osnovnai`.`id_praktik` =  `praktik`.`id_praktik` WHERE `id_gruppa`='5' ORDER BY `FIO`");

$_result5=mysql_query("SELECT  `osnovnai`.`FIO` ,  `predpr`.`predpr` 
FROM  `osnovnai` 
JOIN  `predpr` ON  `osnovnai`.`id_predpr` =  `predpr`.`id_predpr` WHERE `id_gruppa`='5' ORDER BY `FIO` ");

$_result6=mysql_query("SELECT  `osnovnai`.`FIO` ,  `podrazd`.`podrazd` 
FROM  `osnovnai` 
JOIN  `podrazd` ON  `osnovnai`.`id_podrazd` =  `podrazd`.`id_podrazd` WHERE `id_gruppa`='5' ORDER BY `FIO`");

$_result7=mysql_query("SELECT  `osnovnai`.`FIO` ,  `rukovod_pr_na_predpr`.`rukovod_predpr` 
FROM  `osnovnai` 
JOIN  `rukovod_pr_na_predpr` ON  `osnovnai`.`id_rukovod` =  `rukovod_pr_na_predpr`.`id_rukovod_predpr` WHERE `id_gruppa`='5' ORDER BY `FIO`");



$n2=mysql_num_rows($_result); 

//вывод на страничку в виде таблицы 
echo "<table id='table2' border=1> 
<tr><th>ФИО</th><th>Группа</th><th>Специальность</th>
<th>Вид практики</th><th>Предприятие</th><th>Подразделение</th><th>Руководитель на предприятии</th>
</tr>";
//вывод построчно 
for($i=0;$i<$n2;$i++) 
 echo  
"<tr contenteditable='true'><td>",mysql_result($_result,$i,FIO),
"</td><td>",mysql_result($_result2,$i,gruppa), 
"</td><td>",mysql_result($_result,$i,name_special), 
"</td><td>",mysql_result($_result4,$i,praktik),
"</td><td>",mysql_result($_result5,$i,predpr),
"</td><td>",mysql_result($_result6,$i,podrazd),
"</td><td>",mysql_result($_result7,$i,rukovod_predpr),

"</td></tr>"; 
echo "</table>"; 

?>  </p10>

			</div>	
			
	   </div>
	</div>   
	 <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

	</body>
</html>