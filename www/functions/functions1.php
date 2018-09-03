<?php

   /*function get_images_db1 ($praktika){
	global $db;
	$query = "SELECT osnovnai, hhhh, description FROM `osnovnai` WHERE `podrazd_id`= 1";
$res = mysqli_query($db, $query);
$images = array();
while ($row = mysqli_fetch_assoc($res)){
   $images[$row['osnovnai']] = $row;
}
	return $images;
	
	}


   function get_images ($dir){
	 $f = opendir($dir);
    while (false !== ($file = readdir($f))) {
		if($file == '.' || $file == '..') continue;
        $files[] = $file;
	}	
	     return $files;
   }*/
   
   /*function get_predpr($db){
	$result = mysqli_query ($db,"SELECT SUM(FIO) as labal, id_predpr as value FROM `osnovnai` GROUP BY `id_predpr`");
	if(!$result){
		exit();
	}
	$arr = array();
	while($row = mysqli_fetch_object($result)) {
		$arr['data'][] = $row;
	}
	$arr['data'] = json_encode($arr['data']);	
	return $arr;
	
	}*/
?>