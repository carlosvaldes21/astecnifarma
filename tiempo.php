<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container" id="appA">
    <div class="row text-center shadow mt-5 pacientes border-bottom-orange ov-scroll">
      <div class="col-6 offset-3 py-5">
                      
          
      <h3>Listado de todos los procesos actuales</h3>
        <div>
            <ul>
                <li v-for="(proyecto,index) in proyectos">
                <b>Nombre:</b>  {{ proyecto.name }} - <br><b>Duración estimada</b>  <input type="text" v-model="proyecto.time">  <hr><br>
                </li>
            </ul>
                   
        </div>
        
        <div class="resultado bg-success"></div>
      </div>
    </div>
  </div>
 


<?php include('functions/footer.php'); ?>