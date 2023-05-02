<link rel="shortcut icon" href="/Desafio/assets/img/favicon-login.ico" type="image/x-icon">
<link rel="stylesheet" href="/Desafio/assets/style/style.css">
<title>Login</title>

<body>
    <div class="fundo-login">
        <div class="container main">
            <div class="row1">
                <div class="col-md-6 side-image color-fundo">
                    <img class="logo-login" src="/Desafio/assets/img/logo-login.png" alt="logo_login">
                    <div class="text-login">
                        <p>Grupo Confiança<br><i>- Powered by <a class="text-decoration0" href="#">AgroBold</a></i></p>
                    </div>
                </div>

                <div class="col-md-6 right">
                    <form class="form-regist" method="POST" action="http://localhost/Desafio-extra/login/check/">

                        <div class="input-box">
                            <header>Login</header>
                            <div class="input-field">
                                <input name="email" type="text" class="input" id="email" required autofocus>
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field">
                                <input name="password" type="password" class="input" id="password" required>
                                <label for="password">Senha</label>
                            </div>
                            <div class="input-field">
                                <button name="SendLogin" type="submit" class="text-center btn submit" value="Reg">Entrar
                                </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>

</html>