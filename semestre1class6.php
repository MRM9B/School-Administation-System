
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etudiants en niveau 6</title>

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
            <li><a href="#">Semetre 1</a></li>
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

    <div class="container-fluid" style="margin-top: 70px; margin-left: 40px;">
      <div class="row">
        <div class="col-md-2">
          <div class="list-group">
            <!-- <h3 style="color: white;">Statistiques</h3> -->
            <a href="#" class="list-group-item active" style="text-align: center;font-weight: bold;background:#131339;border-color: #131339;">Niveaux</a>
            <a href="semestre1class1.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 1</a>
            <a href="semestre1class2.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 2</a>
            <a href="semestre1class3.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 3</a>
            <a href="semestre1class4.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 4</a>
            <a href="semestre1class5.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;">Niveau 5</a>
            <a href="semestre1class6.php" class="list-group-item list-group-item-action" style="color: #131339;font-weight: bold;background-color: #b7bbc9;">Niveau 6</a>
          </div>
        </div>
        <div class="col-md-9">
         

                  <div class="container">

                    <div>
                      <div id="records_contant"></div>
                        <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light" style="background: #131339; font-weight: bold;color: white;" data-toggle="modal" data-target="#myModal"> Ajouter nouveau </button>
                      </div>
                    </div>
                    
                   

                    <!-- The Modal -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Ajouter les notes</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>




                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="form-group">
                            <label> Numéro:</label>
                            <input type="text" name="" id="numero" class="form-control" disabled="true">
                          </div>
                          <div class="form-group">
                            <label> Nom et prénom:</label>
                            <input type="text" name="" id="lastname" class="form-control" placeholder="Nom et prénom">
                          </div>

                          <div class="form-group">
                            <label> Numero Massar:</label>
                            <input type="text" name="" id="massar" class="form-control" placeholder="Numero Massar">
                          </div>

                          <div class="form-group">
                            <label> Genre:</label>
                            <input type="text" name="" id="genre" class="form-control" placeholder="Féminin/Masculin">
                          </div>

                          <div class="form-group">
                            <label> Moyenne du semetre:</label>
                            <input type="text" name="" id="moyenne" class="form-control" placeholder="Moyenne semestre">
                          </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Ajouter</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>

                      </div>
                    </div>
                  </div>


                    <!-- //after update -->
                      <!-- The Modal -->
                  <div class="modal" id="update_user_modal">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Ajouter les notes</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>




                        <!-- Modal body -->
                        <div class="modal-body">
                          
                          <div class="form-group">
                            <label> Nom et prénom:</label>
                            <input type="text" name="" id="update_lastname" class="form-control" placeholder="Nom et prénom">
                          </div>

                          <div class="form-group">
                            <label> Numero Massar:</label>
                            <input type="text" name="" id="update_massar" class="form-control" placeholder="Numero Massar">
                          </div>

                          <div class="form-group">
                            <label> Genre:</label>
                            <input type="text" name="" id="update_genre" class="form-control" placeholder="Féminin/Masculin">
                          </div>

                          <div class="form-group">
                            <label> Moyenne du semetre:</label>
                            <input type="text" name="" id="update_moyenne" class="form-control" placeholder="Moyenne semestre">
                          </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateuserdetail()">Modifier</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                          <input type="hidden" id="hidden_user_id" name="">
                        </div>

                      </div>
                    </div>
                  </div>


                </div>

            
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
     /* readRecords2();
      readRecords3(); 
      readRecords4(); 
      readRecords5(); 
*/

    });    


    function readRecords(){
        
        var readrecord = "readrecord";
        $.ajax({
          url:"backend6.php",
          type:"POST",
          data:{readrecord:readrecord},
          success:function(data,status){
            $('#records_contant').html(data);
          }

        });
      }



      

    function addRecord(){
      var numero = $('#numero').val();
      var lastname = $('#lastname').val();
      var massar = $('#massar').val();
      var genre = $('#genre').val();
      var moyenne = $('#moyenne').val();


      $.ajax({
        url:"backend6.php",
        type:'post',
        data: { numero :numero,
          lastname : lastname,
          massar : massar,
          genre : genre,
          moyenne : moyenne,
         },

         success:function(data,status){
          readRecords();
         }

      });
    } 


/////////////delete userdetails ////////////
function DeleteUser(deleteid){

  var conf = confirm("Voulez vous vraiment supprimer ce champ ?");
  if(conf == true) {
  $.ajax({
    url:"backend6.php",
    type:'POST',
    data: {  deleteid : deleteid},

    success:function(data, status){
      readRecords();
    }
  });
  }
}



function GetUserDetails(numero){
    $("#hidden_user_id").val(numero);
    $.post("backend6.php", {
            numero: numero
        },
        function (data, status) {
            alert(data);
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            var user = JSON.parse(data);
            alert(user);

            $("#update_lastname").val(user.lastname);
            $("#update_massar").val(user.massar);
            $("#update_genre").val(user.genre);
            $("#update_moyenne").val(user.moyenne);

        }
    );
    $("#update_user_modal").modal("show");
}




function updateuserdetail() {
    var lastname = $("#update_lastname").val();
    var massar = $("#update_massar").val();
    var genre = $("#update_genre").val();
    var moyenne = $("#update_moyenne").val();
    var hidden_user_id = $("#hidden_user_id").val();
    $.post("backend6.php", {
            hidden_user_id: hidden_user_id,
            lastname: lastname,
            massar: massar,
            genre: genre,
            moyenne:moyenne
        },
        function (data, status) {
            $("#update_user_modal").modal("hide");
            readRecords();
        }
    );
}


  </script>

  </body>
</html>