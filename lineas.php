<?php 
include('configuracion.php');
include('bd/conexion.php'); 
$db = new Conexion();

 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: [

            <?php 
             $query  = "SELECT * FROM empleados";
             $result = $db->query($query); 
             while ($fila = mysqli_fetch_array($result)) {
        

           ?>


                '<?php echo $fila["nombres"]; ?>',

        <?php 

           }
       
           ?>


            ]
        },
        yAxis: {
            title: {
                text: 'Cantidas (S/.)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [
        {
            name: 'Sueldo 2016',
            data: [<?php 
             $query  = "SELECT * FROM empleados";
             $result = $db->query($query); 
             while ($fila = mysqli_fetch_array($result)) {
        

           ?>


                <?php echo $fila["sueldo"]; ?>,

        <?php 

           }
       
           ?>]
        }, 
         {
            name: 'Sueldo 2016',
            data: [<?php 
             $query  = "SELECT sueldo+100 as sueldo FROM empleados";
             $result = $db->query($query); 
             while ($fila = mysqli_fetch_array($result)) {
        

           ?>


                <?php echo $fila["sueldo"]; ?>,

        <?php 

           }
       
           ?>]
        }
        ]
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
