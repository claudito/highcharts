<style type="text/css">
        ${demo.css}
</style>

<script>
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