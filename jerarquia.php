<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container" id="appA">
    <div class="row text-center shadow mt-5 pacientes border-bottom-orange ov-scroll">
      <div class="col-6 offset-3 py-5">
      <h3>Listado de roles y jerarquias</h3>
        <div>
            <ul>
                <li v-for="(rol,index) in roles">
                <b>Nombre:</b>  {{ rol.name }} - <b>Rol:</b>  {{ rol.role }}  <hr><br>
                </li>
            </ul>
                   
        </div>
          <h3>Añadir nueva persona y rol</h3>
            
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre de la persona" v-model='nombrePersona'>
              </div>
              <div class="form-group">

              <input type="text" class="form-control" placeholder="Nombre de la persona" v-model='rol'>
              </div>
              <div class="form-group">
                 <button class="btn btn-primary form-control" @click="agregarPersona()">Agregar Persona</button> 
              </div>
              
          
      
        <div class="resultado bg-success"></div>
      </div>
    </div>
  </div>
 


<?php include('functions/footer.php'); ?>