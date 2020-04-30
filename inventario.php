<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container" id="appA">
    <div class="row text-center py-5 shadow mt-5 pacientes border-bottom-orange ov-scroll">
      <div class="col-8 offset-2">
        <h3 class="">Producción, Planta, Herramientas, Insumos</h3>
        <hr>
        <div>
            <ul>
                <li v-for="(inventario,index) in inventarios" class="">
                <b>Nombre:</b>  {{ inventario.nombre }} <br><b>Descripción:</b> {{ inventario.desc }} <br><b>Tipo:</b> {{ inventario.tipo }} <br><b>Cantidad</b>  <input type="text" v-model="inventario.cantidad">  <hr><br>
                </li>
            </ul>
                   
        </div>

        <h3>Añadir inventario</h3>
           
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre del inventario" v-model='nombreInv'>
              </div>
      
              <div class="form-group">

                  <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="descripción del inventario" v-model='descInv'></textarea>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tipo inventario" v-model='tipoInv'>
              </div>
              <div class="form-group">
                  <input type="number" class="form-control" placeholder="Cantidad inventario" v-model='cantInv'>
              </div>
              <div class="form-group">
                 <button class="btn btn-primary form-control" @click="agregarInv()">Agregar Inventario</button> 
              </div>
      </div>
    
     
    </div>
  </div>








<?php include('functions/footer.php'); ?>