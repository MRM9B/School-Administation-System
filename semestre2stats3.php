<?php
  $conn = mysqli_connect('localhost','root',"",'admin');
  
  $displayquery4 = "SELECT COUNT(*) AS `feminin` FROM `note_c3s2` where genre='Féminin' "; 
  $displayquery5 = "SELECT COUNT(*) AS `masculin` FROM `note_c3s2` where genre='Masculin' "; 

  $result4 = mysqli_query($conn,$displayquery4);
  $result5 = mysqli_query($conn,$displayquery5);

  $row4 = mysqli_fetch_assoc($result4);
  $row5 = mysqli_fetch_assoc($result5);



  $displayquery =  "SELECT COUNT(*) AS `count1` FROM `note_c3s2`where decision='Mention' "; 
  $displayquery2 = "SELECT COUNT(*) AS `count2` FROM `note_c3s2` where decision='Encouragement' "; 
  $displayquery3 = "SELECT COUNT(*) AS `count3` FROM `note_c3s2` where decision='Tableau d honneur' "; 
  $displayquery44 = "SELECT COUNT(*) AS `count4` FROM `note_c3s2` where decision='Alerte' "; 


  $result = mysqli_query($conn,$displayquery);
  $result2 = mysqli_query($conn,$displayquery2);
  $result3 = mysqli_query($conn,$displayquery3);
  $result44 = mysqli_query($conn,$displayquery44);

    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    $row3 = mysqli_fetch_assoc($result3);
    $row44 = mysqli_fetch_assoc($result44);



  $displayquery6 = "SELECT COUNT(*) AS `count6` FROM `note_c3s2` where moyenne>=0 and moyenne<5";
  $displayquery7 = "SELECT COUNT(*) AS `count7` FROM `note_c3s2` where moyenne>=5 and moyenne<7";  
  $displayquery8 = "SELECT COUNT(*) AS `count8` FROM `note_c3s2` where moyenne>=7 and moyenne<10";

  $result6 = mysqli_query($conn,$displayquery6);
  $result7 = mysqli_query($conn,$displayquery7);
  $result8 = mysqli_query($conn,$displayquery8);

    $row6 = mysqli_fetch_assoc($result6);
    $row7 = mysqli_fetch_assoc($result7);
    $row8 = mysqli_fetch_assoc($result8);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="lol2.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            echo "['Féminin',".$row4['feminin']."],";
            echo "['Masculin',".$row5['masculin']."],";

          ?>
        ]);

        var options = {
          title: 'Etudiants',
          colors: ['#8c93ad', '#ed9a2f']

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
        
      }
    </script>


 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Genre', 'Pourcentage'],
          <?php 
            echo "['Mention',".$row['count1']."],";
            echo "['Encouragement',".$row2['count2']."],";
            echo "['Tableau d honneur',".$row3['count3']."],";
            echo "['Alerte',".$row44['count4']."]";

          ?>
        ]);

        var options = {
          title: 'Remarques',
          colors: ['#8c93ad', '#ed9a2f','#0B0B3B' ,'#848484']

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartt'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Genre', 'Pourcentage'],
          <?php 
            echo "['Non controllé',".$row6['count6']."],";
            echo "['Intermédiare',".$row7['count7']."],";
            echo "['Controllé',".$row8['count8']."],";

          ?>
        ]);

        var options = {
          title: 'Décision',
          colors: ['#8c93ad', '#ed9a2f','#0B0B3B' /*,'#848484'*/]

        };

        var chart = new google.visualization.PieChart(document.getElementById('piecharttt'));

        chart.draw(data, options);
      }
    </script>


  </head>
  
  <body>
    <header style="height: 120px; background-color: #131339;">
      <a id="l" href="#"><img src="img/logo.png" height="180" width="240" style="margin-top: -30px; padding-left: 9px;"></a>
       <ul style="padding-top: 35px;">

          <li>
           <a href="#"> Notes</a>
           <ul>
            <li><a href="semestre1class1.php">Semetre 1</a></li>
            <li><a href="semestre2class1.php">Semetre 2</a></li>
           </ul>
          </li>

          <li>
            <a href="#">Statistiques</a>
            <ul>
              <li><a href="semestre1stats.php">Semetre 1</a></li>
              <li><a href="semestre2stats.php">Semetre 2</a></li>
           </ul>
          </li>

          <li>
            <a href="#">Compte rendu</a>
            <ul>
              <li><a href="semestre1resultats.php">Semetre 1</a></li>
              <li><a href="semestre2resultats.php">Semetre 2</a></li>
           </ul>
          </li>

          <li>
            <a href="#">Conseil départemental</a>
            <ul>
              <li><a href="semestre1class1conseil.php">Semetre 1</a></li>
              <li><a href="#">Semetre 2</a></li>
           </ul>
          </li>

          
        </ul>

    </header>
    <div style="width: 100%;height: 15px;background-color: #131339; margin-top: -47px;"></div>
        <div style="width: 100%;height: 15px;background-color: #131339; margin-top: -47px;"></div>

    <div class="container-fluid" style="margin-top: 70px; margin-left: 40px;">
      <div class="row">
        <div class="col-md-2">
          <div class="list-group">
            <!-- <h3 style="color: white;">Statistiques</h3> -->
            <a href="#" class="list-group-item active" style="text-align: center;font-weight: bold;background:#131339;border-color: #131339;">Niveaux</a>
            <a href="semestre2stats.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 1</a>
            <a href="semestre2stats2.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 2</a>
            <a href="semestre2stats3.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;background-color: #b7bbc9;">Niveau 3</a>
            <a href="semestre2stats4.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 4</a>
            <a href="semestre2stats5.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 5</a>
            <a href="semestre2stats6.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 6</a>
          </div>
        </div>
        <div class="col-md-9">
         

                  <div class="container">
                    <h3>Statistiques de genre</h3>
                    <div id="records_contant2"></div>

                    <div id="piechart" style="width: 800px; height: 400px;"></div>


                   
                    <h3>Statistiques des décisions du département</h3>
                    <div id="records_contant3"></div>
                    <div id="piechartt" style="width: 800px; height: 400px;"></div>



                    <h3>Statistiques des notes</h3>
                    <div id="records_contant4"></div>

                    <br>
                    <div id="records_contant5"></div>
                    <div id="piecharttt" style="width: 800px; height: 400px;"></div>


                    <br>
                    <h3>Les trois premiers </h3>
                    <div id="records_contant6"></div>
                  

            
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

   <script type="text/javascript">



    $(document).ready(function () {
      readRecords(); 
      readRecords2();
      readRecords3(); 
      readRecords4(); 
      readRecords5(); 
      readRecords6(); 


    });    


    function readRecords(){
        
        var readrecord = "readrecord";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord:readrecord},
          success:function(data,status){
            $('#records_contant').html(data);
          }

        });
      }



      function readRecords2(){
        
        var readrecord2 = "readrecord2";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord2:readrecord2},
          success:function(data,status){
            $('#records_contant2').html(data);
          }

        });
      }


      function readRecords3(){
        
        var readrecord3 = "readrecord3";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord3:readrecord3},
          success:function(data,status){
            $('#records_contant3').html(data);
          }

        });
      }

      function readRecords4(){
        
        var readrecord4 = "readrecord4";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord4:readrecord4},
          success:function(data,status){
            $('#records_contant4').html(data);
          }

        });
      }


      function readRecords5(){
        
        var readrecord5 = "readrecord5";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord5:readrecord5},
          success:function(data,status){
            $('#records_contant5').html(data);
          }

        });
      }


function readRecords6(){
        
        var readrecord6 = "readrecord6";
        $.ajax({
          url:"backend3s2.php",
          type:"POST",
          data:{readrecord6:readrecord6},
          success:function(data,status){
            $('#records_contant6').html(data);
          }

        });
      }

  </script>

  </body>
</html>