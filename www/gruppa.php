<?php 
//define('DB_HOST', 'localhost');
//define('DB_USER', 'root');
//define('DB_PASS', '');
//define('DB_NAME', 'praktika');

//if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
   // exit('Cannot connect to server');
//}
//if (!mysql_select_db(DB_NAME)) {
 //   exit('Cannot select database');
//}

//mysql_query('SET NAMES utf8');

$host='localhost';          //Хост
$db='praktika';               //Имя БД
$user_mysql='root';       //Имя пользователя БД
$pass_mysql='';          //Пароль пользователя БД
$link = mysql_connect($host, $user_mysql, $pass_mysql) or die("<center><h1>Don't connect with database!!!</h1></center>");
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_select_db($db, $link)or die("<center><h1>ERROR CONNECT DATABASE!!!</h1></center>");

print_r($row);
print_r($result);
$id_god = @intval($_GET['id_god']);
$regs=mysql_query("SELECT `gruppa`, `id_god` FROM `gruppa` WHERE `id_god`=$id_god");
if ($regs) {
    $num = mysql_num_rows($regs);     
    $i = 0;
    while ($i < $num) {
      $gruppas[$i] = mysql_fetch_assoc($regs);  
       $i++;
   }    
    $result = array('gruppas'=>$gruppas); 
}
else {
   $result = array('type'=>'error');
 //while ($row = mysql_fetch_assoc($regs)) {
  //  echo $row['id_god'];
  //  echo $row['gruppa'];
//}
//}
//else {
// Проверяем результат
// Это показывает реальный запрос, посланный к MySQL, а также ошибку. Удобно при отладке.
  //  $message  = 'Неверный запрос: ' . mysql_error() . "\n";
  //  die($message);
}
print json_encode($result);
?>