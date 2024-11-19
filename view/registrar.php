<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #007bff;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .footer {
            text-align: center;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .alert {
            display: none;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 16px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
        }

        .text-center {
            text-align: center;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">REGISTRO</h2>
        <form id="registroForm" method="post" action="../model/generar_registro.php">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control" required autocomplete="off" />
                <span id="usuarioError" class="error"></span> 

                <label for="clave">Contraseña</label>
                <input type="password" name="clave" id="clave" placeholder="Contraseña" class="form-control" required autocomplete="off" />
            </div>
            <div class="footer">
                <input type="submit" value="Registrarse" class="btn btn-primary btn-block" />
            </div>
        </form>
        <div class="alert alert-success text-center" id="successMessage">Registro exitoso.</div>
        <div class="alert alert-danger text-center" id="errorMessage">Error en el registro. Inténtalo de nuevo.</div>
        <div class="text-center">
            <p>¿Ya tienes una cuenta? <a href="iniciar.php">Iniciar sesión</a></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usuario').on('blur', function() {
                var usuario = $(this).val();
                if (usuario != "") {
                    $.ajax({
                        url: '../model/check_user.php',
                        type: 'POST',
                        data: {usuario: usuario},
                        success: function(response) {
                            if (response == "existe") {
                                $('#usuarioError').text("Este usuario ya está registrado.");
                            } else {
                                $('#usuarioError').text("");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Error en AJAX: " + error);
                        }
                    });
                }
            });

            $('#registroForm').on('submit', function(e) {
                var error = $('#usuarioError').text();
                if (error != "") {
                    e.preventDefault();
                    alert("El usuario no está disponible.");
                }
            });
        });
    </script>
</body>
</html>
