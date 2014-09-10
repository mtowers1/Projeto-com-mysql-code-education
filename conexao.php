<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=site","root","root");
}
catch (\PDOException $e){
    die("Erro código ".$e->getCode().": ".$e->getMessage());
}
?>