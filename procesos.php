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
                <b>Nombre:</b>  {{ proyecto.name }} - <b>Descripción:</b>  {{ proyecto.desc }} <br><button @click="deleteProccess(index)" class="btn btn-danger"><i class="fas fa-times-circle"></i> Eliminar proceso</button> <hr><br><br>
                </li>
            </ul>
                   
        </div>
        <h3>Añadir proceso</h3>
            <p>Los nuevos procesos se agregan hasta abajo</p>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre del proceso" v-model='nombreProceso'>
              </div>
              <div class="form-group">

                  <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="descripción del proceso" v-model='descProceso'></textarea>
              </div>
              <div class="form-group">
                 <button class="btn btn-primary form-control" @click="agregarProceso()">Agregar Proceso</button> 
              </div>
        <div class="resultado bg-success"></div>
      </div>
    </div>
  </div>
 


<?php include('functions/footer.php'); ?>