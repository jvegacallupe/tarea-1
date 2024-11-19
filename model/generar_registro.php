<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "aym_consultores";

try {
    $DBcon = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
    $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"] ?? '';
    $clave = $_POST["clave"] ?? '';

    $sql_check_user = "SELECT * FROM usuario WHERE usuario = :usuario";
    $stmt_check = $DBcon->prepare($sql_check_user);
    $stmt_check->bindParam(':usuario', $usuario);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        echo '<div style="width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; margin-bottom: 20px;">Error: El usuario ya existe</h2>
                <p style="text-align: center; margin-bottom: 20px;">El usuario que intentas registrar ya está en uso. Por favor, elige otro nombre de usuario.</p>
                <div style="text-align: center;">
                    <button style="background-color: #FF6347; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="history.back();">Regresar</button>
                </div>
            </div>';
    } else {

        $sql = "INSERT INTO usuario (usuario, clave) 
                VALUES (:usuario, :clave)";

        try {
            $stmt = $DBcon->prepare($sql);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':clave', $clave);

            if ($stmt->execute()) {
                echo '<div style="width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <h2 style="text-align: center; margin-bottom: 20px;">Registro guardado con éxito</h2>
                        <p style="text-align: center; margin-bottom: 20px;">Su registro ha sido guardado con éxito. Gracias por utilizar nuestro sistema.</p>
                        <div style="text-align: center;">
                            <button style="background-color: #387fb5; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="location.href=\'../view/iniciar.php\'">Regresar</button>
                        </div>
                    </div>';
            } else {
                echo "Error al guardar el registro.";
            }
        } catch(PDOException $e) {
            echo "Error al guardar el registro: " . $e->getMessage();
        }
    }
} else {
    echo "No se han recibido datos del formulario.";
}

// Cerramos la conexión
$DBcon = null;
?>
