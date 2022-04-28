<!DOCTYPE HTML>

<html>
    <head>
        <title> Lumos Maxima </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type = "imagem/x-icon" href="images/favicon.ico">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/inicio.css">

    <!-- php --> 

</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in" id="signin">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.png" alt="sing up image"></figure>
                        <a href="cadastro.html" class="signup-image-link">Criar uma conta</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" action="ope.php">
                            <div class="form-group">
                                <label for="login"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="login" id="login" placeholder="Seu usuário" required/>
                            </div>
                            <div class="form-group">
                                <label for="senha"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="senha" id="senha" placeholder="Senha"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Lembrar-me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/mainf.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>