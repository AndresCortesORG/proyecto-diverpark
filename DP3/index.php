<?php
session_start();
require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>DiverPark</title>
  <link rel="stylesheet" href="assets/estilos.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
</head>

<body class="hidden">

  <?php if (!empty($_SESSION)) : ?>

    <div class="centrado" id="onload">
      <div class="lds-facebook">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <header>
      <nav id="nav" class="nav1">
        <div class="contenedor-nav">
          <a href="index.php">
            <img src="img/logo1.png" width="100" height="70" class="d-inline-block align-top" alt="">
          </a>

          <div class="enlaces" id="enlaces">
            <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
            <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
            <a href="#" id="enlace-trabajo" class="btn-header">Productos</a>
            <a href="#" id="enlace-equipo" class="btn-header">Nuestra Empresa</a>
            <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
          </div>

          <form class="form-inline my-2 my-lg-0" style="float: right">
            <a href="">
              <img src="icon/buscar.png" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            <a href="logout.php">
              <img src="icon/finalizar.png" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            
          </form>
          <div class="icono" id="open">
            <span>&#9776;</span>
          </div>
        </div>
      </nav>
      <div class="textos">
        <h1>DiverPark.com</h1>
        <h2>Agencia de parques de diversión</h2>
      </div>
    </header>

    <a href="registros.php" style="float: right">
       <button type="button" class="btn btn-outline-success" href="registros.php">Administrador</button>
    </a><br>
    


    <main>
      <section class="about" id="servicio">
        <div class="contenedor">
          <h3>Nuestros servicios</h3>
          <p class="after">Siempre mejorando para ti</p>
          <div class="servicios">
            <div class="caja-servicios">
              <img src="img/diseño2.png.webp" alt="" />
              <h4>Diseñamos</h4>
              <p>Se diseña y crea cualquier tipo de parque.</p>
            </div>
            <div class="caja-servicios">
              <img src="img/construir1.jpg" alt="" />
              <h4>Construimos</h4>
              <p>Construimos, transportamos y instalamos sus parques</p>
            </div>
            <div class="caja-servicios">
              <img src="img/reparamos1.png" alt="" />
              <h4>Reparamos</h4>
              <p>Hacemos mantenimiento y reparaccion de parques</p>
            </div>
          </div>
        </div>
      </section>
      <section class="work contenedor" id="trabajo">
        <h3>Nuestro trabajo</h3>
        <p class="after">No solo hacemos parques, creamos felicidad</p>
        <div class="botones-work">
          <ul>
            <li class="filter" data-nombre="todos">Todos</li>
            <li class="filter" data-nombre="metalicos">Metalicos</li>
            <li class="filter" data-nombre="madera">De madera</li>
            <li class="filter" data-nombre="bio">Biosaludables</li>
          </ul>
        </div>
        <div class="galeria-work">


          <div class="cont-work metalicos">
            <div class="img-work">
              <img src="img/metalicos1.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Metalicos</h4>
            </div>
          </div>
          <div class="cont-work metalicos">
            <div class="img-work">
              <img src="img/metalicos2.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Metalicos</h4>
            </div>
          </div>
          <div class="cont-work metalicos">
            <div class="img-work">
              <img src="img/metalicos3.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Metalicos</h4>
            </div>
          </div>


          <div class="cont-work madera">
            <div class="img-work">
              <img src="img/madera1.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Clasico</h4>
            </div>
          </div>
          <div class="cont-work madera">
            <div class="img-work">
              <img src="img/madera2.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Leon</h4>
            </div>
          </div>
          <div class="cont-work madera">
            <div class="img-work">
              <img src="img/madera3.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Con red</h4>
            </div>
          </div>


          <div class="cont-work bio">
            <div class="img-work">
              <img src="img/biosaludables1.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Biosaludables</h4>
            </div>
          </div>
          <div class="cont-work bio">
            <div class="img-work">
              <img src="img/biosaludables3.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Biosaludables</h4>
            </div>
          </div>
          <div class="cont-work bio">
            <div class="img-work">
              <img src="img/biosaludables2.jpg" alt="" />
            </div>
            <div class="textos-work">
              <h4>Biosaludables</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="team contenedor" id="equipo">
        <h3>Nuestra empresa</h3>
        <p class="after">somos una aeuipo de programadores capaces de desarrollar software eficiente y moderno, utilizando las mas actuales y mejores tecnologias</p>
        <h3>Nuestro equipo</h3>
        <div class="card">
          <div class="content-card">
            <div class="people">
              <img src="img/jhonj.jpg" alt="" />
            </div>
            <div class="texto-team">
              <h4>Jhon Chavez</h4>
              <p>Programador Backend</p>
            </div>
          </div>
          <div class="content-card">
            <div class="people">
              <img src="img/people2.jpg" alt="" />
            </div>
            <div class="texto-team">
              <h4>Juan carlos Sanchez</h4>
              <p>Diseñador</p>
            </div>
          </div>
          <div class="content-card">
            <div class="people">
              <img src="img/people3.jpg" alt="" />
            </div>
            <div class="texto-team">
              <h4>German Galindo</h4>
              <p>Programador Frontend</p>
            </div>
          </div>
        </div>
      </section>
    </main>




  <?php else : ?>
    <header>
      <nav id="nav" class="nav1">
        <div class="contenedor-nav">
          <a href="index.php">
            <img src="img/logo1.png" width="100" height="70" class="d-inline-block align-top" alt="">
          </a>

          <div class="enlaces" id="enlaces">
            <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
            <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
            <a href="#" id="enlace-trabajo" class="btn-header">Productos</a>
            <a href="#" id="enlace-equipo" class="btn-header">Nuestra Empresa</a>
            <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
          </div>


          <form class="form-inline my-2 my-lg-0">
            <a href="login.php">
              <img src="icon/iniciar.png" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
          </form>





          <div class="icono" id="open">
            <span>&#9776;</span>
          </div>
        </div>
      </nav>
      <div class="textos">
        <h1>DiverPark.com</h1>
        <h2>Agencia de parques de diversión</h2>
      </div>
    </header>

  <?php endif; ?>


  <footer id="contacto">
    <?php
    include 'footer.php';
    ?>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/main.js"></script>
  <script src="js/filtro.js"></script>
</body>

</html>