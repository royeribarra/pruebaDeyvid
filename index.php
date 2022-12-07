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
    
</head>
<body>
  <?php
    include_once("conexion.php");
    Conexion::ConexionDB();
  ?>
    
    
    
      

      <section class="form-register">
        <h4>Formulario de Registro de Votacion</h4>

          <input 
          class="controls"  
          type="text" 
          name="nombresApellidos" 
          id="nombresApellidos" 
          placeholder="Nombres y Apellidos">

          <input 
          class="controls" 
          type="text" 
          name="alias" 
          id="alias" 
          placeholder="Alias">

          <input 
          class="controls" 
          type="text" 
          name="rut" 
          id="rut" 
          placeholder="Rut">

          <input 
          class="controls" 
          type="email" 
          name="correo" 
          id="correo" 
          placeholder="Correo">

          <select class="controls" name="region" id="region" required>
              <option value="Huancayo">Elige tu Region</option>
              <option value="Huancayo">Huancayo</option>
              <option value="Chilca">Chilca</option>
              <option value="El Tambo">El Tambo</option>
              <option value="Cajas">Cajas</option>
          </select>

          <select class="controls" name="comuna" id="comuna" required>
              <option value="Huancayo">Elige tu Comuna</option>
              <option value="Las Hualmitas">Las Hualmitas</option>
              <option value="San Jacinto">San Jacinto</option>
              <option value="Llochegua">Llochegua</option>
              <option value="San Carlos">San Carlos</option>
          </select>

          <select class="controls" name="candidato" id="candidato" required>
              <option value="Huancayo">Elige tu Candidato</option>
              <option value="Cerrón">Cerrón</option>
              <option value="Castillo">Castillo</option>
              <option value="Keiko">Keiko</option>
              <option value="Salazar">Salazar</option>
          </select>

          <div class="form-group controls">
            <label for="razon">Como se enteró de nosotros:</label>
            <br>
            
            <label for="vehicle1">Web</label>
            <input class="controls" type="checkbox" id="web" name="web" value="2">

            <label for="vehicle1">Tv</label><br>
            <input class="controls" type="checkbox" id="tv" name="tv" value="3">

            <label for="vehicle1">Redes sociales</label><br>
            <input class="controls" type="checkbox" id="redessociales" name="redessociales" value="4">

            <label for="vehicle1">Amigo</label><br>
            <input class="controls" type="checkbox" id="amigo" name="amigo" value="4">
          </div>   

          <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>

          <input id="enviar" class="botons" type="submit" value="Enviar">

      </section>

      <!--
      <form class="cmxform" id="myform" action="#">
        <fieldset>
          <div class="form-group">
            <label for="fname">Nombre y apellido:</label>
            <br>
            <input 
              class="form-control" 
              type="text" 
              minlength="4" 
              id="nombresApellidos" 
              name="nombresApellidos" 
              required
            />
          </div>
          <div class="form-group">
            <label for="lname">Alias:</label>
            <br>
            <input 
              class="form-control" 
              type="text" 
              id="alias" 
              name="alias"
            />
          </div>
          <div class="form-group">
            <label for="rut">RUT:</label>
            <br>
            <input 
              class="form-control" 
              type="text" 
              id="rut" 
              name="rut"
            />
          </div>
          <div class="form-group">
            <label for="lname">Email:</label>
            <br>
            <input 
              class="form-control" 
              type="text" 
              id="email" 
              name="email"
            />
          </div>
          <div class="form-group">
            <label for="region">Región:</label>
            <br>
            <select name="region" id="region" required>
              <option value="Huancayo">Huancayo</option>
              <option value="Chilca">Chilca</option>
              <option value="El Tambo">El Tambo</option>
              <option value="Cajas">Cajas</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comuna">Comuna:</label>
            <br>
            <select name="comuna" id="comuna" required>
              <option value="Las Hualmitas">Las Hualmitas</option>
              <option value="San Jacinto">San Jacinto</option>
              <option value="Llochegua">Llochegua</option>
              <option value="San Carlos">San Carlos</option>
            </select>
          </div>
          <div class="form-group">
            <label for="candidato">Candidato:</label>
            <br>
            <select name="candidato" id="candidato" required>
              <option value="Cerrón">Cerrón</option>
              <option value="Castillo">Castillo</option>
              <option value="Keiko">Keiko</option>
              <option value="Salazar">Salazar</option>
            </select>
          </div>
          <div class="form-group">
            <label for="razon">Como se enteró de nosotros:</label>
            <br>
            <input type="checkbox" id="web" name="razon" value="1">
            <label for="vehicle1">Web</label>
            <input type="checkbox" id="tv" name="tv" value="2">
            <label for="vehicle1">Tv</label><br>
            <input type="checkbox" id="redesSociales" name="redesSociales" value="3">
            <label for="vehicle1">Redes sociales</label><br>
            <input type="checkbox" id="amigo" name="amigo" value="4">
            <label for="vehicle1">Amigo</label><br>
          </div>
        </fieldset>
      
        <button id="enviar">Enviar</button>
      </form>
      -->

    
      
    <script>
      $('#enviar').click(function(e){
        e.preventDefault();
        const nombresApellidos = document.getElementById("myform").elements["nombresApellidos"].value;
        const alias = document.getElementById("myform").elements["alias"].value;
        const rut = document.getElementById("myform").elements["rut"].value;
        const email = document.getElementById("myform").elements["email"].value;
        const region = document.getElementById("myform").elements["region"].value;
        const comuna = document.getElementById("myform").elements["comuna"].value;
        const candidato = document.getElementById("myform").elements["candidato"].value;
        const razon = document.getElementById("myform").elements["razon"].value;
        console.log(nombresApellidos);

        // $("#myform").validate({
          
        //   event: "blur",
        //   rules: {
        //     nombresApellidos: {
        //       required: true,
        //       minlength: 3
        //     },
        //   },
        //   messages: {
        //     'nombresApellidos': {
        //       required: "Por favor ingresa tu nombre",
        //       minlength: "El nombre debe llevar mas de dos letras raa"
        //     },
        //   },
        //   debug: true,
        //   errorElement: "label",
        //   submitHandler: function(form){
           
            
        //     console.log("ejecutando");
            

        //     request.done(function(data) {
        //       console.log("Me ejecute correctamente"); // imprimimos la respuesta
        //     });

        //     request.fail(function() {
        //       console.log("Me ejecute mal");
        //     });
            
        //   },
        //   invalidHandler: function(event, validator) {
        //     // 'this' refers to the form
        //     var errors = validator.numberOfInvalids();
        //     if (errors) {
        //       var message = errors == 1
        //         ? 'You missed 1 field. It has been highlighted'
        //         : 'You missed ' + errors + ' fields. They have been highlighted';
        //       $("div.error span").html(message);
        //       $("div.error").show();
        //     } else {
        //       $("div.error").hide();
        //     }
        //   }
          
          
        // });
        var request = $.ajax({
          method: "POST",
          url: "http://localhost/deyvid/peticionPrueba.php",
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
        

        
        
        // function enviarPeticion()
        // {
        //   console.log("ejecutando");
        //   var request = $.ajax({
        //     method: "POST",
        //     url: "http://localhost/deyvid/peticionPrueba.php",
        //     data: { 
        //       nombresApellidos: nombresApellidos,
        //       alias: alias,
        //       rut: rut,
        //       email: email,
        //       region: region,
        //       comuna: comuna,
        //       candidato: candidato,
        //       razon: razon
        //     }
        //   });

        //   request.done(function(data) {
        //     console.log("Me ejecute correctamente"); // imprimimos la respuesta
        //   });

        //   request.fail(function() {
        //     console.log("Me ejecute mal");
        //   });
        // }
      });
    </script>
</body>
</html>