<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    $(document).ready(function(){
      var regiones = [];
      let request = $.ajax({
        method: "GET",
        url: "http://localhost/pruebaDeyvid/peticiones/getRegiones.php"
      });
      
      request.done(function(data) {
        console.log("regiones", data);
        regiones = data;
      });

      request.fail(function() {
        console.log("Me ejecute mal");
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      let request = $.ajax({
        method: "GET",
        url: "http://localhost/pruebaDeyvid/peticiones/getCandidatos.php"
      });
      
      request.done(function(data) {
        console.log(data)
        <?php
          $candidatos = `<script> document.writeln(data); </script>`;
        ?>
      });

      request.fail(function() {
        console.log("Me ejecute mal");
      });
    });
  </script>
  <?php
    include("peticiones/candidatos.php");
    $newObj = new Candidatos();
    $amigos = $newObj->getCandidatos();
  ?>
      <section class="form-register">
        <h4>Formulario de Registro de Votacion</h4> 
        <form id="myform" class="cmxform">
          <div class="form-group">
            <label for="nombresApellidos">Nombres y apellidos</label>
            
            <input 
              class="controls form-control"  
              type="text" 
              name="nombresApellidos" 
              id="nombresApellidos" 
              placeholder="Nombres y Apellidos"
              required
            >
          </div>
          <div class="form-group">
            <label for="alias">Alias</label>
            <input 
              class="controls form-control" 
              type="text" 
              name="alias" 
              id="alias" 
              placeholder="Alias"
              required
              >
          </div>

          <div class="form-group">
            <label for="rut">Rut</label>
            <input 
              class="controls form-control" 
              type="text" 
              name="rut" 
              id="rut" 
              placeholder="Rut"
              required
              >
          </div>

          <div class="form-group">
            <label for="correo">Correo</label>
            <input 
              class="controls form-control" 
              type="email" 
              name="email" 
              id="email" 
              placeholder="Correo"
              required
              >
          </div>

          <div class="form-group">
            <label for="region">Elige tu región</label>
            <select class="controls form-control" id="region" name="region">
              <option value="Huancayo" selected>Elige tu Region</option>
              <option value="Huancayo">Huancayo</option>
              <option value="Chilca">Chilca</option>
              <option value="El Tambo">El Tambo</option>
              <option value="Cajas">Cajas</option>
            </select>
          </div>

          <div class="form-group">
            <label for="comuna">Elige tu Comuna</label>
            <select class="controls form-control" id="comuna" name="comuna">
              <option value="Las Hualmitas" selected>Las Hualmitas</option>
              <option value="San Jacinto">San Jacinto</option>
              <option value="Llochegua">Llochegua</option>
              <option value="San Carlos">San Carlos</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="candidato">Elige tu Candidato</label>
            <select class="controls form-control" id="candidato" name="candidato">
              <?php foreach ($amigos as $key => $candidato) 
              {
              ?>

                <option value=<?php echo $candidato['id'];?> >
                  <?php echo $candidato['nombre']; ?>
                </option>

              <?php
              } 
              ?>
            </select>
          </div>


          <div class="form-group controls">
            <label for="razon">Como se enteró de nosotros:</label>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="web" value="web">
              <label class="form-check-label" for="web">Web</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="tv" value="tv">
              <label class="form-check-label" for="tv">Tv</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="redesSociales" value="redesSociales">
              <label class="form-check-label" for="redesSociales">Redes sociales</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="amigos" value="amigos">
              <label class="form-check-label" for="amigos">Amigos</label>
            </div>

          </div>   

          <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>

          
          <button id="enviar" type="submit" class="botons btn btn-primary">Votar</button>
        </form>
      </section>

    
    <script>
      $('#enviar').click(function(e){
        e.preventDefault();
        
        $("#myform").validate({
          event: "blur",
          rules: {
            nombresApellidos: {
              required: true
            },
            alias:{
              minlength: 5
            }
          },
          messages: {
            'nombresApellidos': {
              required: "Por favor ingresa tu nombre."
            },
            alias:{
              minlength: "El alias debe llevar mas de 5 letras."
            }
          },
          debug: true,
          errorElement: "label",
          submitHandler: enviarPeticion(),
          invalidHandler: function(event, validator) {
            // 'this' refers to the form
            var errors = validator.numberOfInvalids();
            if (errors) {
              var message = errors == 1
                ? 'You missed 1 field. It has been highlighted'
                : 'You missed ' + errors + ' fields. They have been highlighted';
              $("div.error span").html(message);
              $("div.error").show();
            } else {
              $("div.error").hide();
            }
          }
          
          
        });
        
        function enviarPeticion()
        {
          console.log(document.getElementById("myform").elements["nombresApellidos"].value);
          const nombresApellidos = document.getElementById("myform").elements["nombresApellidos"].value;
          const alias = document.getElementById("myform").elements["alias"].value;
          const rut = document.getElementById("myform").elements["rut"].value;
          const email = document.getElementById("myform").elements["email"].value;
          const region = document.getElementById("myform").elements["region"].value;
          const comuna = document.getElementById("myform").elements["comuna"].value;
          const candidato = document.getElementById("myform").elements["candidato"].value;
          const razon = 1;
          var request = $.ajax({
            method: "POST",
            url: "http://localhost/pruebaDeyvid/peticiones/guardarVoto.php",
            data: { 
              nombresApellidos: nombresApellidos,
              alias: alias,
              rut: rut,
              email: email,
              region: region,
              comuna: comuna,
              candidato: candidato,
              razon: razon
            }
          });
        
          request.done(function(data) {
            console.log("Me ejecute correctamente"); // imprimimos la respuesta
          });

          request.fail(function() {
            console.log("Me ejecute mal");
          });
        }
        
      });
    </script>
</body>
</html>