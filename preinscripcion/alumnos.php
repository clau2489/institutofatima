<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<!--<?php include("layout/nav.php"); ?> -->

<body id="page-top">

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8">
            <br>
            <form action="enviarmail-alumno.php" method="post" class="alert alert-light">
              <div class="text-center">
                <img src="assets/img/logo.png" width="150px">
                <br>
                <br>
                <h4 class="alert-heading">Formulario para alumnos de INSFA</h4>  
                <hr>                                      
              </div>
              <br> 
              <span>Por favor, complete el siguiente formulario con los datos del alumno.</span>
              <br><br>                
              <div class="form-group">
                <label>Apellido/s: </label>
                <input type="text" class="form-control" id="apellido" name="apellido" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Nombre/s: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>              
              <div class="form-group">
                <label>Nivel, Año y Turno para el que se inscribe: </label>
                <select class="form-control" name="anio" id="anio" required>
                  <option>Seleccionar</option>
                  <optgroup label="Nivel Inicial">
                    <option value="INICIAL - SALA MULTICICLO 2 Y 3 AÑOS (TURNO MAÑANA)">INICIAL - SALA MULTICICLO 2 Y 3 AÑOS (TURNO MAÑANA) </option>
                    <option value="INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO MAÑANA)">INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO MAÑANA) </option>
                    <option value="INICIAL - SALA 3 AÑOS (TURNO TARDE)">INICIAL - SALA 3 AÑOS (TURNO TARDE) </option>
                    <option value="INICIAL - SALA 4 AÑOS (TURNO TARDE)">INICIAL - SALA 4 AÑOS (TURNO TARDE) </option>
                    <option value="INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO TARDE)">INICIAL - SALA MULTICICLO 4 Y 5 AÑOS (TURNO TARDE) </option>
                    <option value="INICIAL - SALA  5 AÑOS (TURNO TARDE)">INICIAL - SALA  5 AÑOS (TURNO TARDE)</option>
                  </optgroup>
                  <optgroup label="Nivel Primario">
                    <option value="PRIMARIA - 1ER GRADO (TURNO TARDE)">PRIMARIA - 1ER GRADO (TURNO TARDE)</option>
                    <option value="PRIMARIA - 2DO GRADO (TURNO TARDE)">PRIMARIA - 2DO GRADO (TURNO TARDE)</option>
                    <option value="PRIMARIA - 3ER GRADO (TURNO TARDE)">PRIMARIA - 3ER GRADO (TURNO TARDE)</option>
                    <option value="PRIMARIA - 4TO GRADO (TURNO TARDE)">PRIMARIA - 4TO GRADO (TURNO TARDE)</option>
                    <option value="PRIMARIA - 5TO GRADO (TURNO TARDE)">PRIMARIA - 5TO GRADO (TURNO TARDE)</option>
                    <option value="PRIMARIA - 6TO GRADO (TURNO TARDE)">PRIMARIA - 6TO GRADO (TURNO TARDE)</option>
                  </optgroup>
                  <optgroup label="Secundaria Básica">
                    <option value="SECUNDARIA BÁSICA - 1ER AÑO (TURNO MAÑANA)">SECUNDARIA BÁSICA - 1ER AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA BÁSICA - 2DO AÑO (TURNO MAÑANA)">SECUNDARIA BÁSICA - 2DO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA BÁSICA - 3ER AÑO (TURNO MAÑANA)">SECUNDARIA BÁSICA - 3ER AÑO (TURNO MAÑANA)</option>                    
                  </optgroup>
                  <optgroup label="Secundaria Superior">
                    <option value="SECUNDARIA SUPERIOR - 4TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR - 4TO AÑO (TURNO MAÑANA)</option>
                  </optgroup>                  
                  <optgroup label="Secundaria Superior - Orientación Ciencias Sociales">
                    <option value="SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)</option>
                  </optgroup>
                  <optgroup label="Secundaria Superior - Orientación Economía y Gestión">
                    <option value="SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 5TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 5TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 6TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 6TO AÑO (TURNO MAÑANA)</option>
                  </optgroup>                                                                     
                </select>
              </div>
              <hr>
              <br>
              <span>Por favor, indique un correo electrónico y un número de teléfono celular de contacto del Padre/ Madre o Tutor: </span>
              <br><br>               
              <div class="form-group">
                <label>Correo Electrónico: </label>
                <input type="mail" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label>Celular de Contacto: (Sin 0, 15 ni guiones)</label>
                <input type="number" class="form-control" id="telefono" name="telefono" required>
              </div>
            <hr>
            <p class="leads">
              Atención: Los datos enviados a través de este formulario son privados y confidenciales. Su cuidado queda bajo la expresa responsabilidad de IGNES SRL.
            </p>       
            <p style="font-size: 16px; font-weight: 400"><input type="checkbox" value="1" name="pepe" onclick="boton.disabled = !this.checked"> - Confirmo el envío del formulario</p>
            <br>
            <button type="submit" class="btn btn-success btn-block" name="boton" disabled>Finalizar</button>
            </form>
          </div>                                                                      
          <br>                   
        </div>          
        </div>          
        </div>
      </div>
    </div>
  </section> 
  <div class="text-center">
    <a href="index.php" class="text-white"> Volver al paso anterior</a>
  </div>

  <?php include("layout/footer.php"); ?>

  <?php include("layout/script.php"); ?>

</body>

</html>