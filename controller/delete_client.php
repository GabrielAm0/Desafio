<?php

include_once  '../model/conexao.class.php';
include_once  '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];

IF(isset($id) && !empty($id)){
    $manager->deleteCliente("registros", $id);
    header("Location: ../view/home.php");
}
