<?php
function ListaMenu($conexao, $server, $pasta=""){
    $sql="SELECT * FROM menu ORDER BY SITE_ORDEM";
    $stmt= $conexao->prepare($sql);
    $stmt->execute();
    $menu="";
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $res){
        $menu.= MontaMenu($res['SITE_MENU'],$server, $pasta);
    }

    if($pasta !=""){
        $menu.="<li><a href='".$server.$pasta."sair'>Sair</a></li>";
    }

   return $menu;
}

function MontaMenu($menu, $server, $pasta=""){
    $menu_m= "<li><a href='".$server.$pasta.strtolower($menu)."'>".ucfirst(str_replace('cos','ços',$menu))."</a></li>";
    return $menu_m;
}

function BuscaConteudo($conexao, $menu_id){

    if($menu_id==NULL){
        $menu_id=1;
    }

    $sql="SELECT conteudo.*, menu.SITE_MENU FROM conteudo INNER JOIN menu ON conteudo.SITE_ID=menu.SITE_ID WHERE conteudo.SITE_ID= :id";
    $stmt= $conexao->prepare($sql);
    $stmt->bindValue("id",$menu_id);
    $stmt->execute();
    $conteudo= $stmt->fetch(PDO::FETCH_ASSOC);
    return $conteudo;

}

function Pesquisa($conexao, $palavra, $server){

    if($palavra !=""){

            $sql="SELECT conteudo.*, menu.SITE_ID, menu.SITE_MENU FROM conteudo INNER JOIN menu ON conteudo.SITE_ID=menu.SITE_ID WHERE conteudo.CONTEUDO LIKE ?";


           $stmt= $conexao->prepare($sql);
           $stmt->bindValue(1,"%$palavra%", PDO::PARAM_STR);
           $stmt->execute();
            $total =$stmt->rowCount();

           if($total > 0){
            $menu="<ul>";
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultado as $res){

                $menu.= MontaMenu($res['SITE_MENU'], $server, "").substr(strip_tags($res['CONTEUDO']),0,300).'...<br /><br />';
            }
              $menu.="</ul>";
            echo $menu;

           }
        else{
            echo "<h2>Nenhum conteúdo encontrado!</h2>";
        }
    }
    else{

    }

}
?>