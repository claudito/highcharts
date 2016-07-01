<?php 
include('configuracion.php');
include('bd/conexion.php'); 
$db = new Conexion();

 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Grafico de Pie</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Lista de Empleados / PIE 3D'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
           <?php 
             $query  = "SELECT * FROM empleados";
             $result = $db->query($query); 
             while ($fila = mysqli_fetch_array($result)) {
        

           ?>


                ['<?php echo $fila["nombres"]; ?>', <?php echo $fila["sueldo"]; ?>],

        <?php 

           }
       
           ?>

                
            ]
        }]
    });
});
        </script>
    </head>
    <body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
         <div id="container"></div>
        </div>
    </div>
</div>

</body>
</html>
