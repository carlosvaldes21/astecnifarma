<?php
include ('functions/header.php');
include ('functions/functions.php');
include ('plantilla.php'); 
  
?>
  <!-- Page Content -->

  <div class="container">
    <div class="row text-center shadow mt-5 pacientes border-bottom-orange ov-scroll">
      <div class="col-6 offset-3 py-5">
      <h3>Checar horario de entrada y salida</h3>
      <p>Datos de prueba para checar.</p>
      <p>Matrícula: 23986</p>
      <p>Contraseña: checar</p>
      <p><b>No puedes dejar campos vacíos ni añadir letras en la matrícula</b></p>
        <form action="">
        <div class="form-group">
        <input type="number" class="form-control" id="input-mat" placeholder="Introduce tu matrícula">
        
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="input-pass" placeholder="Introduce tu contraseña">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" id="btn-horario">Checar Horario</button>
        </div>    
        </form>
        <div class="resultado bg-success"></div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $('#input-mat').keyup(function () {
  
  this.value = this.value.replace(/[^0-9]/g,''); 
});
  $('#btn-horario').click(function(){
    if($('#input-mat').val().length > 0 && $('#input-pass').val().length > 0){
      
      if($('#input-mat').val() == '23986' && $('#input-pass').val() == 'checar'){
        alert('Has checado tu horario');
        $('#input-mat').prop('disabled',true);
        $('#input-pass').prop('disabled',true);
        $('.resultado').addClass('p-4 text-white')
        $('.resultado').text('Ya checaste tu entrada, si vuelves a checar se checará la salida.')
        return false;
      }else{
        alert('Matrícula o contraseña incorrectas');
        return false;
      }
      
    }else{
      alert('No puedes dejar campos vacíos');
      return false;
    }
    
  });
});




</script>






<?php include('functions/footer.php'); ?>