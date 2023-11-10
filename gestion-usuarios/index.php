<?php
session_start();
error_reporting(0);
$varsession = $_SESSION['email'];
if ($varsession == null || $varsession == '' || $varsession != 'admin@gerente.com') {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Informativo</title>

    <style>
      body {
        background-color: cadetblue;

        .container-modal {
          background-color: palegoldenrod;
          width: 60%;
          margin-left: 20%;
          margin-top: 5%;

        }

        .container-modal h1 {
          text-align: center;
          margin-top: 3%;
          font-size: 4rem;
        }

        .container-modal #advertencia {
          margin-left: 2%;
          margin-right: 3%;
          font-style: italic;
          font-size: 1.3rem;
          text-align: justify;
        }

        .contacto {
          text-align: center;
        }

      }
    </style>

  </head>

  <body>
    <!-- Comienzo anuncio informativo -->
    <div class="container-modal">
      <div class="content-modal">
        <h1> Atención !!! </h1>
        <p id="advertencia"> Debe pertenecer al sector 'Directivo'. Si usted es 'Directivo' y se reitera el problema,
          comuníquese con el personal de
          'LF'.</p>
      </div>
      <div class="contacto">
        <h2> Medios de comunicación: </h2>
        <p> Celular: 11 4444-5555<br>
          Tel. linea: 5455-2223<br>
          E-mail: gestionLF@solution.com</p>
      </div>
      <h1><a href="/tp2new/inicio/inicio.php">Cerrar</a></h1>
    </div>
    <!-- Fin Ventana Modal -->
  </body>

  </html>
  <?php

} else {

  // session_destroy();
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic freedom</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../styles/gestion-usuarios.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body style="min-height: 100vh;">

    <nav class="navbar bg-body-tertiary fixed-top" style="padding: 0;">

      <div class="container-fluid">

        <div>
          <a class="navbar-brand" href="#">
            <img class="imageNav" src="../images/favicon.png" alt="logo">
          </a>

          <a class="btn btn-warning m-1" href="../includes/api/auth-api/logout.php"> Cerrar session </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">

            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/tp2new/alta-productos">Alta de productos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="/tp2new/gestion-usuarios/ ">Gestión de usuarios</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/tp2new/reportes/">Reportes</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/tp2new/stock/">Stock</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/tp2new/contacto/">Contacto</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/tp2new/revisar-contacto/">Revisar contacto</a>
              </li>

            </ul>

          </div>

        </div>

      </div>

    </nav>

    <section class="cardContent">



      <header class="cardTitle">
        <h1>Gestión de usuarios</h1>
      </header>

      <hr class="cardDivider">

      <div class="cardBody">

        <select id="selectModType" class="form-select mb-3" aria-label="Default select example" onchange="cangeForm()">
          <option selected>Seleccione tipo de gestion</option>
          <option value="C">Crear usuario</option>
          <option value="D">Eliminar usuario</option>
          <option value="E">Editar usuario</option>
        </select>

        <form id="formNewUser">

          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="email" class="form-control" id="usuario" placeholder="Ingrese el email del usuario">
          </div>

          <div class="mb-3">
            <label for="usuario" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese la contraseña">
          </div>

          <label for="exampleFormControlInput1" class="form-label">Permisos</label>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="alta-productos">
            <label class="form-check-label" for="alta-productos">
              Alta de productos
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="gestion-usuarios">
            <label class="form-check-label" for="gestion-usuarios">
              Gestion de usuarios
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="reportes">
            <label class="form-check-label" for="reportes">
              Reportes
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="stock">
            <label class="form-check-label" for="stock">
              Stock
            </label>
          </div>

        </form>

        <form id="formEditUser" style="display: none;">

          <select id="selectEditUser" class="form-select mb-3" aria-label="Default select example">
            <option selected>Seleccione usuario</option>
          </select>

          <label for="exampleFormControlInput1" class="form-label">Permisos</label>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="alta-productos">
            <label class="form-check-label" for="alta-productos">
              Alta de productos
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="gestion-usuarios">
            <label class="form-check-label" for="gestion-usuarios">
              Gestion de usuarios
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="reportes">
            <label class="form-check-label" for="reportes">
              Reportes
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="stock">
            <label class="form-check-label" for="stock">
              Stock
            </label>
          </div>

        </form>

        <form id="formDelUser" style="display: none;">

          <select id="selectEditUser" class="form-select mb-3" aria-label="Default select example">
            <option selected>Seleccione usuario a eliminar</option>
          </select>

        </form>


      </div>

      <hr class="cardDivider">

      <footer class="cardFooter">

        <div id="btnNewUser" class="botones">
          <button class="btn btn-success m-1">Crear Usuario</button>
          <button class="btn btn-danger m-1">Cancelar</button>
        </div>

        <div id="btnEditUser" class="botones" style="display: none;">
          <button class="btn btn-warning m-1">Editar Usuario</button>
          <button class="btn btn-danger m-1">Cancelar</button>
        </div>

        <div id="btnDelUser" class="botones" style="display: none;">
          <button class="btn btn-danger m-1">Eliminar Usuario</button>
          <button class="btn btn-warning m-1">Cancelar</button>
        </div>

      </footer>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"></script>
    <script src="usuarios.js"></script>
  </body>

  </html>
  <?php
}
?>