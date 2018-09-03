<?php 
function connect($host,$user,$pass,$dbname) {
	$db = mysqli_connect($host,$user,$pass,$dbname);
	if(mysqli_connect_error($db)) { 
		exit('Connect Error:' . mysqli_connect_error($db));
	}
	return $db;
}
mysql_query('SET NAMES utf8');
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
$db = connect("localhost","root","","praktika");
?>
<!DOCTYPE html>
<html>
<head>
     <?php 
	 $title = "Справочники";
	        require_once "blocks/head.php";
	 ?>
	  
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(function(){
	var id_god =$(".god").val();
	$.ajax({
		type= "POST",
		url: "command.php",
		data: (id_god:id_god),
		success: function (data) {
			$(".command").html(data);
		}
		});
     $(".god") .change(function(){
		var id_god =$(".god").val();
		if(id_god == 0) {
			
		}
		$.ajax({
		type= "POST",
		url: "command.php",
		data: (id_god:id_gruppa),
		success: function (data) {
			$(".command").html(data);
		}
		});
	 });
});
</script>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	        <div id="gal">
				<div class="item">	 
                            <div class="spr">	
				 <select size='1' class="god">
			 <option value="0"> --Выбрать учебный год-- </option>
			 <?php
			 $query = $db->query("SELECT * FROM `god`");
			 while ($row = mysqli_fetch_object($query)){
			 echo "<option value='($row->id_god)'>".$row->god."</option>";
			 }
			 ?>
			 </select>
			 <span class="gruppa">
			 
			 </span>
			 
 <a href="/sprav_gr_predpr_podr_rukovod_0.php">			 
			   <div class="butr">Контактная информация о студентах по выбранной группе</div></a></div>
		
		<a href="/sprav_rukovod_po_pr.php">			 
			   <div class="butr">Справочник с информацией о практике студентов по выбранной группе</div></a>
		
		<a href="/sprav_rukovod_po_pr.php">			 
			   <div class="butr">Справочник руководителей по выбранному предприятию</div></a>
			   
			   
<a href="/sprav_rukovod_na_pr.php">			 
			   <div class="butr">Справочник всех руководителей на всех предприятиях</div></a>
			
			</div>
	   </div>
	</div>   
	 <?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

	</body>
</html>