<!DOCTYPE HTML>
<html>
<head>
    <title>AYM CONSULTORES Y EJECUTORES</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #007bff;
        }

        h3 {
            font-size: 1.5em;
            color: #00bcd4;
        }

        p {
            color: #333;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
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

        .error {
            color: #e74c3c;
            font-size: 14px;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        .alert {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>AYM CONSULTORES Y EJECUTORES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">INICIAR SESIÓN</h3>
                <br>
                <form id="loginForm" method="post" action="../model/validar.php">
                    <div class="form-group">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control" required />
                        <input type="password" name="clave" placeholder="Contraseña" class="form-control" required />
                        <span id="usuarioError" class="error"></span>
                    </div>
                    <div class="footer">
                        <input type="submit" value="Ingresar" name="login" class="btn btn-primary" />
                        <p><a href="registrar.php">Registrar</a></p> 
                    </div>
                </form>
            </div>
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
                        }
                    });
                }
            });

            $('#loginForm').on('submit', function(e) {
                var error = $('#usuarioError').text();
                if (error != "") {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
