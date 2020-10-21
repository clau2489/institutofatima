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
            <form action="datoscomplementarios.php" method="post" class="alert alert-light">
              <div class="text-center">
                <img src="assets/img/logo.png" width="150px">
                <br>
                <br>
                <h4 class="alert-heading">Formulario para nuevos ingresantes y/o cambio de nivel</h4>  
                <hr>                                      
              </div>
              <br> 
              <span>Por favor, complete el siguiente formulario con los datos del alumno.</span>
              <br><br>                               
              <div class="form-group">
                <label>Apellido/s: </label>
                <input type="text" class="form-control" id="apellidoalumno" name="apellidoalumno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Nombre/s: </label>
                <input type="text" class="form-control" id="nombrealumno" name="nombrealumno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>N° de documento: </label>
                <input type="text" class="form-control" id="documentoalumno" name="documentoalumno" required>
              </div>
              <div class="form-group">
                <label>Edad: </label>
                <input type="number" class="form-control" id="edadalumno" name="edadalumno" required>
              </div>
              <div class="form-group">
                <label>Fecha de Nacimiento: </label>
                <input type="date" class="form-control" id="nacimientoalumno" name="nacimientoalumno" required>
              </div>               
              <div class="form-group">
                <label>Calle: </label>
                <input type="text" class="form-control" id="callealumno" name="callealumno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Altura: </label>
                <input type="number" class="form-control" id="alturaalumno" name="alturaalumno" required>
              </div>
              <div class="form-group">
                <label>Piso: </label>
                <input type="number" class="form-control" id="pisoalumno" name="pisoalumno">
              </div>
              <div class="form-group">
                <label>Dpto: </label>
                <input type="text" class="form-control" id="deptoalumno" name="deptoalumno">
              </div>
              <div class="form-group">
                <label>Localidad: </label>
                <input type="text" class="form-control" id="localidadalumno" name="localidadalumno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Provincia: </label>
                <input type="text" class="form-control" id="provinciaalumno" name="provinciaalumno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Nivel, año y turno para el que se inscribe: </label>
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
                  <optgroup label="Secundaria Superior - Orientación Ciencias Sociales">
                    <option value="SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES – 4TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES – 4TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  5TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR: ORIENTACIÓN CIENCIAS SOCIALES –  6TO AÑO (TURNO MAÑANA)</option>
                  </optgroup>
                  <optgroup label="Secundaria Superior - Orientación Economía y Gestión">
                    <option value="SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 4TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 4TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 5TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 5TO AÑO (TURNO MAÑANA)</option>
                    <option value="SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 6TO AÑO (TURNO MAÑANA)">SECUNDARIA SUPERIOR ORIENTACIÓN ECONOMÍA Y GESTIÓN DE LAS ORGANIZACIONES – 6TO AÑO (TURNO MAÑANA)</option>
                  </optgroup>                                                                     
                </select>
              </div>              
              <div class="form-group">
                <label>¿Es alumno/a de INSFA?: </label>
                <select class="form-control" name="esalumno" id="esalumno">
                  <option>Seleccionar..</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="form-group">
                <label>¿Tiene hermanos o familiares en la institución?</label>
                <select class="form-control" name="tienehermanos" id="tienehermanos">
                  <option>Seleccionar..</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>              
              <div class="form-group">
                <label>Si no proviene de INSFA indicar escuela de procedencia:</label>
                <input type="text" class="form-control" id="procedencia" name="procedencia" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <hr>             
              <p class="lead">Próximo paso: cargue los datos del padre/ madre o tutor</p>
              <button type="submit" class="btn btn-success btn-block">Continuar</button>
            </form>
          </div>                                                                      
          <br>                   
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