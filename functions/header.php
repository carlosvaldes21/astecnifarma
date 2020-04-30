<?php
session_start();
if(!isset($_SESSION['id_user'])){
   header('Location: login.php');
}
require('functions/connection.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="robots" content="noindex, nofollow">
<title>Sistema de administración.</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Pinyon+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
<script src="https://kit.fontawesome.com/4633de1bd3.js" crossorigin="anonymous"></script>
</head>
  
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Panel de administración</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checarhorario.php">Horarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="seguimiento.php">Revisión de proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inventario.php">Inventario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Documentos</a>
          </li>
<?php 
            if($_SESSION['user_type'] == 1){
?> 
              <li class="nav-item">
                <a class="nav-link" href="registrar.php">Registrar nuevo usuario</a>
              </li>

<?php
            }
?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--  Termina Menú -->