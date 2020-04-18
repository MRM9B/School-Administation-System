
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Compte rendu du semetre 1</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="lol2.css">
  </head>
  
  <body>
    <header style="height: 120px; background-color: #131339;">
      <a id="l" href="#"><img src="img/logo.png" height="180" width="240" style="margin-top: -30px; padding-left: 9px;"></a>
       <ul style="padding-top: 35px;">

          <li>
           <a href="#"> Notes</a>
           <ul>
            <li><a href="semestre1class1.php">Semetre 1</a></li>
            <li><a href="#">Semetre 2</a></li>
           </ul>
          </li>

          <li>
            <a href="#">Statistiques</a>
            <ul>
              <li><a href="semestre1stats.php">Semetre 1</a></li>
              <li><a href="#">Semetre 2</a></li>
           </ul>
          </li>

          <li>
            <a href="#">Compte rendu</a>
            <ul>
              <li><a href="semestre1resultats.php">Semetre 1</a></li>
              <li><a href="#">Semetre 2</a></li>
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
                      
                    <div id="records_contant5" ></div>

          


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

   <script type="text/javascript">



    $(document).ready(function () {
      
      readRecords5(); 

    });    


   

      function readRecords5(){
        
        var readrecord5 = "readrecord5";
        $.ajax({
          url:"backend1total.php",
          type:"POST",
          data:{readrecord5:readrecord5},
          success:function(data,status){
            $('#records_contant5').html(data);
          }

        });
      }

   


  </script>

  </body>
</html>