<?php 
include('configuracion.php');
include('bd/conexion.php'); 
$db = new Conexion();

 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Gráfico de Lineas</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Sueldos Mensuales',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: highcharts.com',
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
                text: 'Cantidades (S/.)'
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <div id="container"></div>
        </div>
    </div>
</div>


	</body>
</html>
