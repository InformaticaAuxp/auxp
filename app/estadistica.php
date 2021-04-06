<?php 
session_start();

if (!empty($_SESSION['GUSER'])) {/*#1*/
              
    require('db/conexion.php');
  
    $nombre =  $_SESSION['GNOMBRE'];
    $tipousuario = $_SESSION['GTUSUARIO'];
    $tipousuarioname = $_SESSION['GTUSUARIONAME'];
    $us = $_SESSION['GUSER'];
    $fechainicio = $_SESSION['GFECHA'];
    $correo = $_SESSION['GMAIL'];
           
                           
?>
 <html>
  <head>
    <title>Estadistica</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/posiciones.css">
     <script src="js/scrip.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
        // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      // FUNCION 1
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Consultas');
        data.addRows([
          ['Enero', 20],
          ['Febrero', 6],
          ['Marzo', 0],
          ['Mayo', 0],
          ['Abril', 0]
        ]);

        // Set chart options
        var options = {'title':'Estadistica de consulta por mes',
                       'width':700,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      // FUNCION 2

      function drawChart2() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Presupuestados', 5],
          ['Planilleros', 2],
          ['Contrato', 7],
          ['Exsalubristas', 1],
          ['Jubilados', 2],
          ['Conyuge', 3],
          ['Hijo', 0],
          ['Conyuge', 0],
          ['Administrativo', 0],
          ['Otras Dependencias', 0]
        ]);

        // Set chart options
        var options = {'title':'Estadistica por tipo de asociado',
                       'width':700,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }

    </script>
    
  </head>
  <body><div class="area">
        
        <div class="padre">
            <div class="hijo">
                <div class="boxstatistics">
                    <div style=" " id="chart_div"></div>
                    <div style=" border-top: 1px solid; " id="chart_div2"></div>
                </div>
                
            </div>
        </div>

        </div>
        <?php include 'inc/menu.php' ?>
  </body>
    </html>                   
<?php          

/*#1*/}else{/*#1*/
               header('location: http://192.168.1.85/asapespu/app/index.php');
    /*#1*/}       
 ?>
         


































