<?php

include_once '../controller/RefreshPage.php';
include_once '../view/head.php';
include_once  '../model/conexao.class.php';
include_once  '../model/Manager.class.php';


$manager = new Manager();

$id = $_POST['id'];
?>
<!-- Folha de Estilo(CSS) - Direta -->
<link rel="stylesheet" href="../assets/style/style.css">

<title>Editar</title>

<body>

    <div class="container">
        <div class="container-fluid">

            <div class="titulo col-md-4">
                <!--                DIV VAZIA-->
            </div>

            <div class="titulo col-md-4">
                <div class="display-flex">
                    <img class=logo src="../assets/img/logo.png" alt="Logo">
                    <h2 class="titulo client-list-register m-0">Editar cadastro<i class="cor-list pl-2 fa fa-list"></i></h2>
                </div>
            </div>

            <div class="col-md-4">
               
            </div>
        </div>
    </div>


    <div class="container">

        <?php foreach ($manager->getInfo("registros", $id) as $client_info) : ?>

            <form class="row g-3" method="post" action="../controller/update_client.php">
                    <div class="col-md-6">
                        <label class="form-label">Nome: <i class=" fa fa-user"></i></label>
                        <input class="form-control" type="text" name="name" placeholder="Nome" required autofocus value="<?= $client_info['name'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">E-mail: <i class=" fa fa-envelope"></i></label>
                        <input class="form-control" type="email" name="email" placeholder="email" required value="<?= $client_info['email'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">CPF: <i class=" fa fa-address-card"></i></label>
                        <input class="form-control" type="text" name="cpf" placeholder="CPF" required id="cpf" value="<?= $client_info['cpf'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Data de Nascimento: <i class=" fa fa-calendar"></i></label>
                        <input class="form-control" type="date" name="birth" placeholder="Data de Nascimento" required value="<?= $client_info['birth'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Telefone: <i class=" fa fa-phone"></i></label>
                        <input class="form-control" type="text" name="phone" placeholder="Telefone" required id="phone" value="<?= $client_info['phone'] ?>">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">Endereço: <i class=" fa fa-map"></i></label>
                        <input class="form-control" type="text" name="address" placeholder="Seu endereço" required value="<?= $client_info['address'] ?>">
                    </div>

                    <input type="hidden" name="id" value="<?= $client_info['id'] ?>">


                <?php endforeach; ?>

                <div class="mt-2 button-center col-md-12">
                    <button class="me-2 btn btn-success btn-lg">
                        Editar <i class="fa fa-user-edit"></i>
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