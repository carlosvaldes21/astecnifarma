<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container">
    <div class="row text-center shadow mt-5 pacientes border-bottom-orange ov-scroll">
      
      <div class="col-12 p-5 col-md-4 cuadro">
        <a href="procesos.php">
          <img src="img/proceso.jpg" alt="" class="img-fluid rounded">
          <p class="m-0">Procesos</p>
        </a>
      </div>
        
      <div class="col-12 p-5 col-md-4 cuadro">
        <a href="jerarquia.php">
          <img src="img/jerarquia.jpg" alt="" class="img-fluid rounded">
          <p class="m-0">Jerarquía</p>
        </a>
      </div>
        
      <div class="col-12 p-5 col-md-4 cuadro">
        <a href="tiempo.php">
          <img src="img/tiemposproceso.jpg" alt="" class="img-fluid rounded">
          <p class="m-0">Tiempos de procesos</p>
        </a>
      </div>
        
      
    </div>
  </div>








<?php include('functions/footer.php'); ?>