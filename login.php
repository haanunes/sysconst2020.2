<?php
session_start();
if (isset($_SESSION['idUsuarioLogado'])) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysconst/addUsuario.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Locadora</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style type="text/css">
            .negrito {
                font-weight: bold;
            }
            .div-form{
                margin: 50px auto;
                width: 400px;
            }
            .div-form form{
                box-shadow: 0px 2px 2px #000000;
                background-color: white;
                padding: 30px;
            }
            body {
                background-color: #ededed   ;
            }
            h2{
                text-align: center;
                margin-bottom: 50px;
            }
            .campo{
                margin-bottom: 20px;
            }
        </style>

    </head>
    <body>
        <div class="div-form">
            <form action="controle/controleLogin.php" method="post">
                <h2>Login</h2>
                <?php if (isset($_GET['erro']))
                    echo "<p style='color:red'>Login ou senha incorretos.</p>";
                ?>
                <div class="campo">
                    <input type="text" class="form-control" placeholder="Login" name="login"/>
                </div>

                <div class="campo">
                    <input type="password" class="form-control " placeholder="Senha" name="senha"/>
                </div>
                <div class="campo text-center">
                    <input type="submit" value="Entrar" class="btn btn-primary negrito"/>
                    <div>
                        <div class="text-right" style="margin-top:20px">
                            <input type="checkbox" value="sim" name="lembrar"/> Lembrar de mim
                        </div>
                        </form>
                    </div>
                    </body>
                    </html>
