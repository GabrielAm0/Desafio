<?php
include_once '../controller/RefreshPage.php';
include_once 'head.php';
?>
<!-- Folha de Estilo(CSS) - Direta -->
<link rel="stylesheet" href="../assets/style/style.css">

<title>Registrar</title>

<body>
    <div class="container">
        <div class="container-fluid">

            <div class="titulo col-md-4">
                <!--                DIV VAZIA-->
            </div>

            <div class="titulo col-md-4">
                <div class="display-flex">
                    <img class=logo src="../assets/img/logo.png" alt="Logo">
                    <h2 class="titulo client-list-register m-0">Registrar<i class="cor-list pl-2 fa fa-list"></i></h2>
                </div>
            </div>
            <div class="col-md-4">
               
            </div>
        </div>
    </div>


    <div class="container">

        <form class="row g-3" method="post" action="../controller/insert_client.php">
            <div class="col-md-6">
                <label class="form-label">Nome: <i class=" fa fa-user"></i></label>
                <input class="form-control" type="text" name="name" placeholder="Nome" required autofocus>
            </div>

            <div class="col-md-6">
                <label class="form-label">E-mail: <i class=" fa fa-envelope"></i></label>
                <input class="form-control" type="email" name="email" placeholder="email" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">CPF: <i class=" fa fa-address-card"></i></label>
                <input class="form-control" type="text" name="cpf" placeholder="CPF" required id="cpf">
            </div>

            <div class="col-md-4">
                <label class="form-label">Data de Nascimento: <i class=" fa fa-calendar"></i></label>
                <input class="form-control" type="date" name="birth" placeholder="Data de Nascimento" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Telefone: <i class=" fa fa-phone"></i></label>
                <input class="form-control" type="text" name="phone" placeholder="Telefone" required id="phone">
            </div>

            <div class="col-md-12">
                <label class="form-label">Endereço: <i class=" fa fa-map"></i></label>
                <input class="form-control" type="text" name="address" placeholder="Seu endereço" required>
            </div>

            <div class="mt-2 button-center col-md-12">
                <button class="me-2 btn btn-primary btn-lg">
                    Cadastrar <i class="fa fa-user-plus"></i>
                </button>

                <div class="botao">
                    <a class="link-botao" style="text-decoration: none;" href="home.php">Voltar</a>
                </div>
            </div>
        </form>
    </div>

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#cpf").mask("000.000.000-00");
        $("#phone").mask("(00) 00000-0000");
    });
</script>