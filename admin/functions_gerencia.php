<?php

function ValidaLogin($login, $senha , $conexao){
    $sql="SELECT * FROM login WHERE LOGIN=:login LIMIT 1";

    $stmt= $conexao->prepare($sql);
    $stmt->bindValue("login",$login);
    $stmt->execute();
    $total =$stmt->rowCount();

    if($total > 0){
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if(VerificaSenha($senha, $resultado['SENHA'])){
             $_SESSION['logado']="m123456";
		}
        else{
            $erro="Login Inválido";
            return $erro;
        }
    }
    else{
        $erro="Login Inválido";
        return $erro;
    }
}

function VerificaSenha($senha, $hash){
    if (password_verify($senha, $hash)) {
     return true;
    }
    else{
     return false;
    }
}

function AtualizaConteudo($editor, $id, $conexao){
    if($editor !="" && $id !=""){
        $sql="UPDATE conteudo SET CONTEUDO = :conteudo WHERE SITE_ID = :id LIMIT 1";

        $stmt= $conexao->prepare($sql);
        $stmt->bindValue("conteudo",$editor);
        $stmt->bindValue("id",$id);
        $stmt->execute();

        $erro="Conteúdo atualizado com sucesso!";
        return $erro;
    }
    else{
        $erro="Nâo foi possível atualizar o conteúdo!";
        return $erro;
    }
}
?>