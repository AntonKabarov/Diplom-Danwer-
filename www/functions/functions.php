<?php
function connect($host,$user,$pass,$dbname) {
	$db = mysqli_connect($host,$user,$pass,$dbname);
	if(mysqli_connect_error($db)) { 
		exit('Connect Error:' . mysqli_connect_error($db));
	}
	return $db;
}
  /* define("SITE","http://diplom/");
   define("DBHOST","localhost");
   define("DBUSER","root");
   define("DBPASS","");
   define("DBNAME","praktika");
   $db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die ("Нет");*/
    
	
	
	 function get_predpr2($db){
	//$result = mysqli_query ($db,"SELECT COUNT(`FIO`) as value, `id_predpr` as label FROM `osnovnai` 
	//WHERE `id_god`=2 GROUP BY `id_predpr`");
	$result2 = mysqli_query ($db,"SELECT COUNT(`FIO`) as value, `gruppa`.`gruppa` as label FROM `osnovnai` 
JOIN `gruppa` ON `osnovnai`.`id_gruppa`=`gruppa`.`id_gruppa`
WHERE `gruppa`.`id_god`=2 GROUP BY `id_predpr`");

//	$result = mysqli_query ($db,"SELECT `gruppa`.`gruppa`, COUNT(`FIO`) as value, `id_predpr` as label FROM `osnovnai`,`gruppa`
//WHERE `gruppa`.`id_god`=2 GROUP BY `id_predpr`");
if(!$result2){
		exit();
	}
	$arr = array();
 // $result3 = mysql_query($result2);
 //$row2 = mysql_fetch_assoc($result2); 
	while($row = mysqli_fetch_object($result2)) {
		
		$arr['data'][] = $row;
	
	}
	$arr['data'] = json_encode($arr['data']);	
	//$arr[gruppa] = json_encode($arr[gruppa]);
	
	return $arr;
	
	}
	
   ?>