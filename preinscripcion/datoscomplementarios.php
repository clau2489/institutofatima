<!DOCTYPE html>
<html lang="en">
<?php
$apellidoalumno = $_POST['apellidoalumno'];
$nombrealumno = $_POST['nombrealumno'];
$documentoalumno = $_POST['documentoalumno'];
$edadalumno = $_POST['edadalumno'];
$nacimientoalumno = $_POST['nacimientoalumno'];
$callealumno = $_POST['callealumno'];
$alturaalumno = $_POST['alturaalumno'];
$pisoalumno = $_POST['pisoalumno'];
$deptoalumno = $_POST['deptoalumno'];
$localidadalumno = $_POST['localidadalumno'];
$anio = $_POST['anio'];
$esalumno = $_POST['esalumno'];
$tienehermanos= $_POST['tienehermanos'];
$procedencia = $_POST['procedencia'];
?>

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
            <form action="enviarmail-nuevo.php" method="post" class="alert alert-light">
              <div class="text-center">
                <img src="assets/img/logo.png" width="150px">
                <br>
                <br>
                <h4 class="alert-heading">Formulario para nuevos ingresantes y/o cambio de nivel</h4>  
                <hr>                                      
              </div>
              <br>
              <span>A continuación, complete el siguiente formulario con los datos del padre/ madre o tutor.</span>
              <br><br>               
              <div class="form-group">
                <label>Apellido/s: </label>
                <input type="text" class="form-control" id="apellidopadre" name="apellidopadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Nombre/s: </label>
                <input type="text" class="form-control" id="nombrepadre" name="nombrepadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>N° de documento: </label>
                <input type="text" class="form-control" id="documentopadre" name="documentopadre" required>
              </div>
              <div class="form-group">
                <label>Edad: </label>
                <input type="number" class="form-control" id="edadpadre" name="edadpadre" required>
              </div>
              <div class="form-group">
                <label>Calle: </label>
                <input type="text" class="form-control" id="callepadre" name="callepadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Altura: </label>
                <input type="number" class="form-control" id="alturapadre" name="alturapadre" required>
              </div>
              <div class="form-group">
                <label>Piso: </label>
                <input type="number" class="form-control" id="pisopadre" name="pisopadre">
              </div>
              <div class="form-group">
                <label>Dpto: </label>
                <input type="text" class="form-control" id="deptopadre" name="deptopadre">
              </div>
              <div class="form-group">
                <label>Localidad: </label>
                <input type="text" class="form-control" id="localidadpadre" name="localidadpadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Provincia: </label>
                <input type="text" class="form-control" id="provinciapadre" name="provinciapadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>
              <div class="form-group">
                <label>Correo Electrónico: </label>
                <input type="mail" class="form-control" id="emailpadre" name="emailpadre" required>
              </div>
              <div class="form-group">
                <label>Celular de Contacto: (Sin 0, 15 ni guiones)</label>
                <input type="number" class="form-control" id="telefonopadre" name="telefonopadre" required>
              </div>
              <div class="form-group">
                <label>Ocupación</label>
                <input type="text" class="form-control" id="ocupacionpadre" name="ocupacionpadre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
              </div>                           
              <div class="form-group">
                <label>¿Es ex-alumno/a de INSFA?: </label>
                <select class="form-control" name="esexalumno" id="esexalumno">
                  <option>Seleccionar..</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="form-group">
                <label>Los datos a enviar son en calidad de: </label>
                <select class="form-control" name="responsable" id="responsable">
                  <option>Seleccionar..</option>
                  <option value="PADRE">Padre</option>
                  <option value="MADRE">Madre</option>
                  <option value="TUTOR">Tutor</option>
                </select>
              </div>              
            <hr>
            <input type="hidden" name="apellidoalumno" id="apellidoalumno" value="<?php echo $apellidoalumno ?>">
            <input type="hidden" name="nombrealumno" id="nombrealumno" value="<?php echo $nombrealumno ?>">
            <input type="hidden" name="documentoalumno" id="documentoalumno" value="<?php echo $documentoalumno ?>">
            <input type="hidden" name="edadalumno" id="edadalumno" value="<?php echo $edadalumno ?>">
            <input type="hidden" name="nacimientoalumno" id="nacimientoalumno" value="<?php echo $nacimientoalumno ?>">
            <input type="hidden" name="callealumno" id="callealumno" value="<?php echo $callealumno ?>">
            <input type="hidden" name="alturaalumno" id="alturaalumno" value="<?php echo $alturaalumno ?>">
            <input type="hidden" name="pisoalumno" id="pisoalumno" value="<?php echo $pisoalumno ?>">
            <input type="hidden" name="deptoalumno" id="deptoalumno" value="<?php echo $deptoalumno ?>">
            <input type="hidden" name="localidadalumno" id="localidadalumno" value="<?php echo $localidadalumno ?>">
            <input type="hidden" name="anio" id="anio" value="<?php echo $anio ?>">
            <input type="hidden" name="esalumno" id="esalumno" value="<?php echo $esalumno ?>">
            <input type="hidden" name="tienehermanos" id="tienehermanos" value="<?php echo $tienehermanos ?>">
            <input type="hidden" name="procedencia" id="procedencia" value="<?php echo $procedencia ?>">
            <p class="leads">
              Atención: Los datos enviados a través de este formulario son privados y confidenciales. Su cuidado queda bajo la expresa responsabilidad de IGNES SRL.
            </p>              
            <p style="font-size: 11px; font-weight: 400"><input type="checkbox" value="1" name="pepe" onclick="boton.disabled = !this.checked"> - Confirmo el envio del formulario</p>                                          
              <button type="submit" class="btn btn-success btn-block" name="boton" disabled> Finalizar pre inscripción</button>
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