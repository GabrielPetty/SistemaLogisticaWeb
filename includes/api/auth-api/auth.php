<?php

require '../../config/db-config.php';


//Loguearse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = json_decode(file_get_contents("php://input"));
  if ($data === null) {
    echo "Error al decodificar el JSON.";
  } else {
    $email = $data->email;
    $password = $data->password;
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows > 0) {
      $fila = $resultado->fetch_assoc();
      $hash_almacenado = $fila['password'];

      // Verificar si la contraseña coincide con el hash almacenado
      if (password_verify($password, $hash_almacenado)) {
        session_start();
        $_SESSION['email'] = $email;
        echo "TRUE";
      } else {
        echo "FALSE";
      }
    } else {
      echo "FALSE";
    }

    $conexion->close();
  }
}
?>