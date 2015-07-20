<?php

				require_once("conexion/conexion.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" 
        src="Highcharts-4.1.5/js/jquery.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Historic World Population by Region'
        },
        subtitle: {
            text: 'Source: Wikipedia.org'
        },
        xAxis: {
            categories: [
<?php
$sql=mysql_query("select * from empleados order by sueldo desc");
while($res=mysql_fetch_array($sql)){			
?>
			
			['<?php echo $res['nombres'] ?>'],
			
<?php
}
?>
			
			],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 1800',
            data: [
			<?php
$sql=mysql_query("select * from empleados order by sueldo desc");
while($res=mysql_fetch_array($sql)){			
?>			
			[<?php echo $res['sueldo'] ?>],
		
<?php
}
?>			
			]
        },
        {
            name: 'Year 2000',
            data: [
            <?php
$sql=mysql_query("select * from empleados order by sueldo desc");
while($res=mysql_fetch_array($sql)){            
?>          
            [<?php echo $res['sueldo'] ?>],
        
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
<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
<br><br>
<center><a href="ejemplo4.php">Ver ejemplo 4</a></center>
	</body>
</html>
