<?php
include ('serv.php');
if (isset($_POST['usuario'])) {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Error en la consulta: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "existe";
    } else {
        echo "disponible";
    }
}
?>
