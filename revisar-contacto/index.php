<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic freedom</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../styles/revisar-contacto.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-body-tertiary fixed-top" style="padding: 0;">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img class="imageNav" src="../images/favicon.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
                            <a class="nav-link" aria-current="page" href="/tp2/alta-productos">Alta de productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tp2/gestion-usuarios/index.html">Gestión de usuarios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tp2/reportes/index.html">Reportes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tp2/stock/index.html">Stock</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tp2/contacto/">Contacto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/tp2/revisar-contacto/">Revisar contacto</a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </nav>


    <?php

    require("../includes/config/db-config.php");

    $consulta = "SELECT * FROM contacto";
    $resultado = $conexion->query($consulta);

    if (!$resultado) {
        echo '<script type="text/javascript">
        alert("No hubo resultados para la consulta.");
            </script>';
    }

    echo '<section class="cardSection">
    <h1> Revisar mensajes </h1>
    <table id="tableContactos" class="table table-bordered">
    <thead> 
    <tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Mensaje</th>
    </tr>
    ';

    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila[0] . "</td>";
        echo "<td>" . $fila[1] . "</td>";
        echo "<td>" . $fila[2] . "</td>";
        echo "<td>" . $fila[3] . "</td>";
        echo "<td>" . $fila[4] . "</td>";
    }
    echo "</table>
    </section>";
    $conexion->close();


    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="usuarios.js"></script>
</body>

</html>