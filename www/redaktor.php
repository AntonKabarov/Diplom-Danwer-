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
	        require_once "blocks/head.php";?>
</head>
<script>

</script>

<body>
   <?php require_once "blocks/header.php" ?>
   <?php require_once "config.php" ?>
	 
	<div id="wrapper">
	   <div id="leftCol">
	   <div id="l">
	   <a href="/adminv.php">Выйти из администратора</a></div>
	        <div id="mesto">
			
<?php 

$_result=mysql_query("SELECT `osnovnai`.`FIO`, `special`.`name_special`FROM `osnovnai` JOIN `special`
ON `osnovnai`.`id_special`=`special`.`id_special` ORDER BY `FIO` ");


$_result2=mysql_query("SELECT  `osnovnai`.`FIO` ,  `gruppa`.`gruppa` 
FROM  `osnovnai` 
JOIN  `gruppa` ON  `osnovnai`.`id_gruppa` =  `gruppa`.`id_gruppa` ORDER BY `FIO` ");

//$result3=mysql_query("SELECT `tip_progr`.`tip_progr` FROM `tip_progr`");

$_result3=mysql_query("SELECT  `osnovnai`.`FIO` ,  `tip_progr`.`tip_progr` 
FROM  `osnovnai` 
JOIN  `tip_progr` ON  `tip_progr`.`id_tip_progr` =  `osnovnai`.`tip_progr` ORDER BY `FIO`");

$_result4=mysql_query("SELECT  `osnovnai`.`FIO` ,  `praktik`.`praktik` 
FROM  `osnovnai` 
JOIN  `praktik` ON  `osnovnai`.`id_praktik` =  `praktik`.`id_praktik` ORDER BY `FIO`");

$_result5=mysql_query("SELECT  `osnovnai`.`FIO` ,  `predpr`.`predpr` 
FROM  `osnovnai` 
JOIN  `predpr` ON  `osnovnai`.`id_predpr` =  `predpr`.`id_predpr`ORDER BY `FIO` ");

$_result6=mysql_query("SELECT  `osnovnai`.`FIO` ,  `podrazd`.`podrazd` 
FROM  `osnovnai` 
JOIN  `podrazd` ON  `osnovnai`.`id_podrazd` =  `podrazd`.`id_podrazd` ORDER BY `FIO`");

$_result7=mysql_query("SELECT  `osnovnai`.`FIO` ,  `rukovod_pr_na_predpr`.`rukovod_predpr` 
FROM  `osnovnai` 
JOIN  `rukovod_pr_na_predpr` ON  `osnovnai`.`id_rukovod` =  `rukovod_pr_na_predpr`.`id_rukovod_predpr` ORDER BY `FIO`");

$_result8=mysql_query("SELECT  `osnovnai`.`FIO` ,  `srok_pr`.`srok_pr` 
FROM  `osnovnai` 
JOIN  `srok_pr` ON  `osnovnai`.`id_srok_pr` =  `srok_pr`.`id_srok_pr`ORDER BY `FIO` ");

$_result9=mysql_query("SELECT  `osnovnai`.`FIO` ,  `otvetstven_za_praktit`.`otvetstven_za_praktit` 
FROM  `osnovnai` 
JOIN  `otvetstven_za_praktit` ON  `osnovnai`.`id_otvetstven_za_praktit` =  `otvetstven_za_praktit`.`id_otvetstven_za_praktit` ORDER BY `FIO`");
//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 
//узнаем, сколько в массиве $result строчек 

$n2=mysql_num_rows($_result); 

//вывод на страничку в виде таблицы 
echo "<table id='table2' border=1> 
<tr><th>ФИО</th><th>Группа</th><th>Тип программы</th><th>Специальность</th>
<th>Вид практики</th><th>Предприятие</th><th>Подразделение</th><th>Руководитель на предприятии</th>
<th>Срок практики</th><th>Руководитель на кафедре</th></tr>";
//вывод построчно 
for($i=0;$i<$n2;$i++) 
 echo  
"<tr contenteditable='true'><td>",mysql_result($_result,$i,FIO),
"</td><td>",mysql_result($_result2,$i,gruppa), 
"</td><td>",mysql_result($_result3,$i,tip_progr), 
"</td><td>",mysql_result($_result,$i,name_special), 
"</td><td>",mysql_result($_result4,$i,praktik),
"</td><td>",mysql_result($_result5,$i,predpr),
"</td><td>",mysql_result($_result6,$i,podrazd),
"</td><td>",mysql_result($_result7,$i,rukovod_predpr),
"</td><td>",mysql_result($_result8,$i,srok_pr),
"</td><td>",mysql_result($_result9,$i,otvetstven_za_praktit),
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