<?php
  session_start();
  if(!isset ($_SESSION['user'])){
    header("location:..//index.php");
  } else {
    $us=$_SESSION['user'];
    $ps=$_SESSION['pass'];
    $priv=$_SESSION['priv'];
	}  
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú</title>

  <link rel="icon" href="..//img/UTD.png" type="image/png">

  <link rel="stylesheet" href="..//css/menu.css">
  <link rel="stylesheet" href="..//css/fonts.css">

  <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">


</head>

<body>

  <div class="contenedor">
    <div class="formulario">
      <h3 class="menutitulo"> MENÚ PRINCIPAL</h3>
      <form action="acciones.php" method="post">
        <div>
          <p class="realizar">¿Qué deseas realizar?</p>
          <div class="opciones">
            <?php if ($priv=='admin') { ?>
            <div>
              <div class="opciones acciones">
                <input type="radio" name="opcion" id="alta" value="a" required>
                <label for="alta" id="lbl-alta" class="opcion icon-agregar"></label>
              </div>
              <p class="txt-op">Alta</p>
            </div>

            <div>
              <div class="opciones acciones">
                <input type="radio" name="opcion" id="baja" value="b" required>
                <label for="baja" id="lbl-baja" class="opcion icon-eliminar">
                </label>
              </div>
              <p class="txt-op">Baja</p>
            </div>

            <div>
              <div class="opciones acciones">
                <input type="radio" name="opcion" id="modificar" value="m" required>
                <label for="modificar" id="lbl-modificar" class="opcion icon-editar"></label>
              </div>
              <p class="txt-op">Modificación</p>
            </div> 
            <?php } ?>
            <div>
              <div class="opciones acciones">
                <input type="radio" name="opcion" id="consulta" value="c" required>
                <label for="consulta" id="lbl-consulta" class="opcion icon-buscar"></label>
              </div>
              <p class="txt-op">Consulta</p>
            </div>
            
          </div>
        </div>
        <p class="realizar">Seleccione una tabla</p>
        <div class="opciones-tabla">
            <div class=" opciones-tabla tabla">
              <input type="radio" name="tabla" id="alumnos" value="a" required>
              <label for="alumnos" id="lbl-alumnos"><img src="..//img/alumnos.png" alt="">Alumnos</label>
            </div>

            <div class="opciones-tabla tabla">
              <input type="radio" name="tabla" id="contactos" value="c" required>
              <label for="contactos" id="lbl-contactos"><img src="..//img/contactos.png" alt="">Contactos</label>
            </div>

            <div class="opciones-tabla tabla">
              <input type="radio" name="tabla" id="usuarios" value="u" required>
              <label for="usuarios" id="lbl-usuarios"><img src="..//img/usuarios.png" alt="">Usuarios</label>
            </div>
        </div>
        <div class="botones">
          <input class="botones enviar" type="submit" name="enviar" value="Enviar" id="enviar">
          <input class="botones borrar" type="reset" name="borrar" value="Borrar">
        </div>

        <input type="hidden" name="us" value="<? echo $us; ?>">
        <input type="hidden" name="ps" value="<? echo $ps; ?>">
      </form>
      <div class="cerrar-sesion">
        <a href='login.php' class="icon-salida">Cerrar sesión</a>
      </div>
  </div>
</body>

</html>