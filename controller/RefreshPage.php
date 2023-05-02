<!--Coloquei só para a página do navegador atualizar automaticamente a cada um tempo determinado (segundos) por eu estar utilizando o XAMPP e ele não atualizar a página automaticamente.-->
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
    $url .= $_SERVER['HTTP_HOST'];
    $url .= $_SERVER['REQUEST_URI'];
    $url;
}
$page = $url;

//Quantidade de segundos no qual a página é atualizada automaticamente no navegador.
$sec = "2";
// 
?>