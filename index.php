<?php
include_once "view/head.php";
?>
<link rel="shortcut icon" href="assets/img/favicon-login.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/style/style.css">
<title>Login</title>

<body>
    <div class="fundo-login">
        <div class="container main">
            <div class="row1">
                <div class="col-md-6 side-image color-fundo">
                    <img class="logo-login" src="assets/img/logo-login.png" alt="logo_login">
                    <div class="text-login">
                        <p>Grupo Confiança<br><i>- Powered by <a class="text-decoration0" href="#">AgroBold</a></i></p>
                    </div>
                </div>

                <div class="col-md-6 right">
                    <form class="form-regist" method="POST">

                        <div class="input-box">
                            <header>Login</header>
                            <div class="input-field">
                                <input name="email_user" type="text" class="input" id="email" required autofocus>
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field">
                                <input name="senha_usuario" type="password" class="input" id="password" required>
                                <label for="password">Senha</label>
                            </div>
                            <div class="input-field">
                                <a href="view/home.php" type="submit" class="text-center btn submit buton-entrar" value="Reg">Entrar
                                </a>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>

</html>