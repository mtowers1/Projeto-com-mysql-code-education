<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=site","root","root");
}
catch (\PDOException $e){
    die("Erro código ".$e->getCode().": ".$e->getMessage());
}
?>