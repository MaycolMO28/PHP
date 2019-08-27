<?php 

include ('conexion.php')  ;

  ?>

<!DOCTYPE html>
<html  lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
        <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel"   style="background-color: #239B56;>
        <div class="container">
            <a href="index.php" class="navbar-brand" title="" style="font-size: 24px;color: #fff;"> RED_SOCIAL</a>


<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
     
         <li class="nav-item active"  style="color: #fff;">
            <a class="nav-link" href="#">LOGIN <span class="sr-only">(current)</span></a>
          </li>

         <li class="nav-item active"  style="color: #fff;">
            <a class="nav-link" href="#">REGISTRAR <span class="sr-only">(current)</span></a>
          </li>

    </ul>
</div>

        </div>
    </nav>





    <main class="login-form">
        
<div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-6" style="margin-top: 50px;">
   
                    
<!-- Material form register -->
<div class="card">

    <h5 class="card-header success-color white-text text-center py-4">
        <strong>Registrate Aquí!</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="datos.php" method="post">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input name="nombre" type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">Nombre</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input name="apellido" type="text" id="materialRegisterFormLastName" class="form-control">
                        <label for="materialRegisterFormLastName">Apellido</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input name="email" type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input name="contraseña" type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Contraseña</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                   Máximo hasta 8 caracteres..
                </small>
            </div>

                <div class="md-form">
                <input name="repetir_contraseña" type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Repetir Contraseña</label>
               
            </div>

            <!-- Phone number -->
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">

                      
  <input name="fecha" type="date" name="fecha" value="" id="materialRegisterFormFirstName" class="form-control" >
                       



                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                           <select class="browser-default custom-select mb-4" name="tipo_sexo">
        <option value="" disabled selected>SEXO</option>
        <option  >Hombre</option>
        <option   >Mujer</option>
          <option   >Otros</option>
   
    </select>
                  
                    </div>
                </div>
            </div>


            <!-- Newsletter -->
          <!--   <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div> -->

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Registrar</button>

           
            <hr>

            <!-- Terms of service -->
          

        </form>
        <!-- Form -->
<?php

if (isset($_POST['submit'])) {
    # code...

     echo $_POST['fecha']; 
}





 ?>
    </div>

</div>
<!-- Material form register -->
                </div>



    </div>
</div>

    </main>



 <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
