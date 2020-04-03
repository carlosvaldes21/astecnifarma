<?php session_start();
 require 'functions/connection.php';
 include 'functions/functions.php';

 if(isset($_SESSION['id_user'])){
    ?><script>window.location.replace("index.php");</script><?php
 }
 $errors = array();
if(!empty($_POST)){
		if($_POST['value']==2){
		        
		        $emailNumbers = $mysqli->real_escape_string($_POST['emailNumbers']);
		        $passwords = $mysqli->real_escape_string($_POST['passwords']);

		        if(isNullLogin($emailNumbers,$passwords)){

		            $errors[] = 'Debes llenar todos los campos';

		    	}else{
		    		 $errors[] = login($emailNumbers,$passwords);
		   		}       
 	}
}
?>


<!DOCTYPE html>

<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="robots" content="noindex, nofollow">
  <title>Astecnifarma - Inicia sesión</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/fullcalendar.min.css">
  <link rel="stylesheet" href="css/bootstrap-clockpicker.css">

  <!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="js/moment.min.js"></script>
<!--  Full Calendar -->
<script src="js/fullcalendar.min.js"></script>
<script src="js/es.js"></script>
<script src="js/bootstrap-clockpicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/moment.min.js"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
<script src="js/main.js"></script>

</head>
  
<body class="login">

	<div class="container h-100">
		<div class="row h-100 d-flex align-items-center">
			<div class="col-md-8 offset-md-2 shadow p-5 rounded fondo-blanco border-bottom-orange">
                <div class="logo-ast text-center">
                    <img src="img/logo.png" alt="Logo astecnifarma" class="img-fluid">
                </div>
				<form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST">
                <input type="text" class="form-control my-3" placeholder="Correo o Telefono" name="emailNumbers">
                <input type="password" class="form-control my-3" placeholder="Contraseña" name="passwords">
                <input type="hidden" value="2" name="value">
                <input type="submit" class="form-control my-3 btn-submit" name="enviar" value="Iniciar sesión">
            	</form>
            	<?php 
                if(isset($_POST['enviar'])){
                    if($_POST['value'] == 2){
                        $bien = "";
                        resultBlock($errors,$bien);
                    }
                }
             ?>
			</div>
		</div>
	</div>


<?php include('functions/footer.php'); ?>