<?php 
//require "functions/functions.php";
//$db = connect("localhost","root","","praktika");

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



function search ($query) 
{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 50) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `FIO` FROM `osnovnai` WHERE `FIO` = '$query'";
            $q2 = "SELECT `telefon`, `FIO` FROM `osnovnai` WHERE `FIO`= '$query'";
            $q3 = "SELECT  `osnovnai`.`FIO` ,  `gruppa`.`gruppa` 
FROM  `osnovnai` 
JOIN `gruppa` ON `gruppa`.`id_gruppa`=`osnovnai`.`id_gruppa`
WHERE `osnovnai`.`FIO`='$query'";
$q4 = "SELECT  `osnovnai`.`FIO` ,  `special`.`name_special` 
FROM  `osnovnai` 
JOIN `special` ON `special`.`id_special`=`osnovnai`.`id_special`
WHERE `osnovnai`.`FIO`='$query'";
$q5 ="SELECT  `osnovnai`.`FIO` ,  `tip_progr`.`tip_progr` 
FROM  `osnovnai` 
JOIN `tip_progr` ON `tip_progr`.`id_tip_progr`=`osnovnai`.`tip_progr`
WHERE `osnovnai`.`FIO`='$query'";
            $result = mysql_query($q);
           $result2 = mysql_query($q2);
		   $result3 = mysql_query($q3);
		   $result4 = mysql_query($q4);
		   $result5 = mysql_query($q5);
            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);
			$row2 = mysql_fetch_assoc($result2); 
		   $row3 = mysql_fetch_assoc($result3); 
		 $row4 = mysql_fetch_assoc($result4); 
		 $row5 = mysql_fetch_assoc($result5); 
               // $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';
$text = '<p>По запросу <b>'.$query.'</b> найдена информация: <br>
<br>Группа:'.$row3[gruppa].'</br>
<br>Специальность:'.$row4[name_special].'</br>
<br>Квалификация:'.$row5[tip_progr].'</br>
<br>Телефон:'.$row2[telefon]. '</br> 
</p>';

                //do {
                    // Делаем запрос, получающий ссылки на статьи
                   // $q1 = "SELECT `link` FROM `tema` WHERE `description` = '$row[tema_id]'";
                    //$result1 = mysql_query($q1);

                  // if (mysql_affected_rows() > 0) {
                      //$row1 = mysql_fetch_assoc($result1);
                    //}

                  //  $text .= '<p><a> href="'.$row1['link'].'/'.$row['tema'].'/'.$row['utema_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                  // <p>'.$row['desc'].'</p>';

                //} while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p> По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p> Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
?>
<!DOCTYPE html>
<html>
<head>
     <?php 
	 $title = "Поиск";
	        require_once "blocks/head.php";
	 ?>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	   <div id="sea">
	        <h2>Результат поиска</h2>
			 <div id="s"> <?php 
if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
?>	</div>		
	  </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
</body>
</html>