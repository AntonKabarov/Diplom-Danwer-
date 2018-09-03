<?php session_start ();if (!empty ($_SESSION['prepod'])){if ($_SESSION['prepod']){?>
<!DOCTYPE html>
<html>
<head>
     <?php 
	 $title = "Справочники";
	        require_once "blocks/head.php";
	 ?>
<title>Авторизация преподавателя</title>

<style type= text/css>#wrap{width: 100%;height: 100%;}.loginbox1{width: 300px;padding: 4px;border: 1px solid #777;background-color: #777;color: white;font-weight: bold;}.loginbox2{width: 300px;padding: 4px;border: 1px solid #777;color: #777;}</style>
</head>
<script></script>

<body>
   <?php require_once "blocks/header.php" ?>
	 <?php require_once "config1.php" ?>
			
<table cellpadding=0 cellspacing= «0» id= «wrap»><tr><td align=center><table cellpadding=0 cellspacing= «0»><tr><td class=loginbox1 align=center>Вход выполнен</td></tr><tr><td class=loginbox2 align=center><a href=adminkontrol.php>Перейти к авторизации преподавателя</a></td></tr></table></td></tr></table>
<?exit;}}$_SESSION['prepod'] = false;include ('config1.php');function not_logged_in (){echo '<html><head><title>Авторизация преподавателя</title><style type=text/css>#wrap{width: 100%;height: 100%;}#wraptd{padding: 20px;}.loginbox1{width: 300px;padding: 4px;border: 1px solid #777;background-color: #777;color: white;font-weight: bold;}.loginbox2{width: 300px;padding: 4px;border: 1px solid #777;color: #777;}.loginbox2 input{width: 200px;margin: 3px 0;border-color: #888;color: #777;}</style></head><body><center><table cellpadding=0 cellspacing=0 id=wrap><tr><td align=center id=wraptd><table cellpadding=0 cellspacing=0><tr><td class=loginbox1 align=center>Вход в контроль практики</td></tr><tr><td class=loginbox2 align=center><form action=kontrol.php method=post><input type=text name=login value=ФИО onclick=this.value=""><br><input type=text name=password value=Код авторизации onclick=this.value=""><br><input type=submit value=Войти></form></td></tr></table></td></tr></table></center></body></html>';exit;}if (!$_POST) not_logged_in ();if (!$_POST['login']) not_logged_in ();if (!$_POST['password']) not_logged_in ();if ($_POST['login']!= $prepodlogin) not_logged_in ();if ($_POST['password']!= $prepodpassw) not_logged_in ();$_SESSION['prepod'] = true;?><html><head><title>Авторизация преподавателя</title><style type=text/css>#wrap{width: 100%;height: 100%;}.loginbox1{width: 300px;padding: 4px;border: 1px solid #777;background-color: #777;color: white;font-weight: bold;}.loginbox2{width: 300px;padding: 4px;border: 1px solid #777;color: #777;}</style></head><body><center><table cellpadding=0 cellspacing=0 id=wrap><tr><td align=center><table cellpadding=0 cellspacing=0><tr><td class=loginbox1 align=center>Вход выполнен</td></tr><tr><td class=loginbox2 align=center><a href=adminkontrol.php>Перейти к авторизации преподавателя</a></td></tr></table></td></tr></table>

	      
	   
	   <?php require_once "blocks/rightCol.php" ?>
	  
	<?php require_once "blocks/footer.php" ?>
	</body>
</body>
</html></html>