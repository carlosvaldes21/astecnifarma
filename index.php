<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container">
    <div class="row text-center shadow mt-5 pacientes border-bottom-orange ov-scroll">
      
      <div class="col-12 p-5 col-md-3 cuadro">
        <a href="">
          <img src="img/horario.png" alt="" class="img-fluid rounded">
          <p class="m-0">Checar horario</p>
        </a>
      </div>
        
      <div class="col-12 p-5 col-md-3 cuadro">
        <a href="seguimiento.php">
          <img src="img/proyectos.png" alt="" class="img-fluid rounded">
          <p class="m-0">Revisión de proyectos actuales</p>
        </a>
      </div>
        
      <div class="col-12 p-5 col-md-3 cuadro">
        <a href="inventario.php">
          <img src="img/inventario.png" alt="" class="img-fluid rounded">
          <p class="m-0">Inventario</p>
        </a>
      </div>
        
      <div class="col-12 p-5 col-md-3 cuadro">
        <a href="">
          <img src="img/documentos.png" alt="" class="img-fluid rounded">
          <p class="m-0">Documentos</p>
        </a>
      </div>
    </div>
  </div>








<?php include('functions/footer.php'); ?>