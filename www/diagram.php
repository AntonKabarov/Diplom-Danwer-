<?php 
require "functions/functions.php";
$db = connect("localhost","root","","praktika");
$data = get_predpr2($db);
print_r($data);
?>
<!DOCTYPE html>

<html>
<head>
     <?php 
	 $title = "Диаграммы";
	        require_once "blocks/head.php";
	 ?>
	 <script type="text/javascript" src="js/fusioncharts.js"></script>
	 <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
	  <script type="text/javascript" src="js/themes/fusioncharts.theme.carbon.js"></script>
     

	 <script>
	 FusionCharts.ready (function () {
	 
	var revenueChart = new FusionCharts ({
	
		"type":"column2d",
		"type":"pie3d",
		"renderAt":"diagram",
		"widht":640,
		"height":400,
		"dataFormat":"json",
		"dataSource": {
			"chart": {
				"caption":"Кол-во студентов по предприятиям 2016-2017г.",
				"subCaption":"Диаграмма",
				"xAxisName":"предприятие",
				"yAxisName":"кол-во",
"theme":"fint",
				//"theme":"carbon",
				//"numberInteger":"",
				//"numberString":"",
				//"showBorder":1,
                //"borderColor":"#536b69",
               "borderThickness":3,
               "borderAlpha":70,
              "bgColor":"#437a38",
                "bgAlpha":50
			
			},
			"data": [

{

"label": "ВТМ-25Д",
"value": "66"

},	
{

"label": "ВТМ-25Д",
"value": "24"

},	
{

"label": "ВТМ-25Д",
"value": "4"

},	
{

"label": "ВТМ-25Д",
"value": "3"

},	
{

"label": "ИТ-43Д",
"value": "1"

},	
{

"label": "ВТМ-16Д",
"value": "1"

},	


]
		
		}
	});
	    revenueChart.render();
	 });
	 
	 </script>
</head>
<body>
   <?php require_once "blocks/header.php" ?>
	
	<div id="wrapper">
	   <div id="leftCol">
	        <div id="diagram">
		
			
	        </div>
	   </div>
	   <?php require_once "blocks/rightCol.php" ?>
	</div>   
	<?php require_once "blocks/footer.php" ?>
</body>
</html>