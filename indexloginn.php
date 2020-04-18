
<!DOCTYPE html>
<html>
<head>
  <title>Page d'authentification</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<!-- <header style="height: 100px; background-color: #131339;">  
  <a id="l" href="#"><img src="img/logo.png" height="145" width="200" style="margin-top: -20px; padding-left: 9px;"></a>
  <h1 style="text-align: center;font-family: serif; font-weight: bold;font-size: 34px;color: #ffffff;margin-top: -95px;margin-left: 140px;">Systéme d'administration scolaire de BOUKMAKH</h1>
</header> -->
<body style="background-image: url('sc.jpg');">


  <div class="modal-dialog text-center">
    

    <div class="col-sm-9 main-section">
      <div class="modal-content" style="background-image: linear-gradient(-90deg, #8c93ad, #ed9a2f);padding: 30px;width: 390px;margin-top: 90px;opacity: .9">

        <div class="col-12 user-img">
          <img src="img/face.png" style="margin-top: -29px;">
        </div>

        <div class="col-12 form-input">
          <form action="login.php" method="POST">
            <div class="form-group">
              <input name="email" type="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-success">Connexion</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

</body>

</html>
