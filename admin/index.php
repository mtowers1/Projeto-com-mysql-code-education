<?php session_start();
$erro="";
require_once "../conexao.php";
require_once "../functions.php";
require_once "functions_gerencia.php";
require_once "validacao.php";
require_once "../topo.php";
if(isset($_POST["login"]) && isset($_POST["senha"])){
    $erro=ValidaLogin($_POST["login"],$_POST["senha"], $conexao);
}
if(isset($_POST["editor"]) && $_POST["editor"]!="" && isset($_SESSION["logado"])){
    $erro=AtualizaConteudo($_POST["editor"],$_POST["id"], $conexao);
}
if(!isset($_SESSION["logado"])){
    require_once "login.php";
}
else{
    require_once "conteudo.php";
}
require_once "../rodape.php";
?>