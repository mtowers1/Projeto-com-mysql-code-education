<?php
$rotas=['1' =>'home','2' => 'empresa','3'=> 'produtos','4' => 'servicos','5' => 'contato','6' => 'recebecontato'];
$rota= parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = explode("/",$rota['path']);
$server="http://".$_SERVER['HTTP_HOST']."/";
if(isset($path[2])){
$arquivo=strtolower($path[1]);
}
else{
$arquivo="";	
}
if(!isset($_POST['pesquisar'])){
    if($arquivo==""){
        $arquivo="home";
    }
	
	
    if($arquivo=="admin"){
        header("Location:".$server."admin/");
        exit();
    }
	
    foreach($rotas as $r=>$v){

        if($v==$arquivo){
           $id=$r;
        }
    }


   if(!isset($id)){
        echo utf8_decode("Página não encontrada!");
        http_response_code(404);
        exit();
    }
    if (!array_key_exists($id, $rotas)) {
        echo utf8_decode("Página não encontrada!");
        http_response_code(404);
        exit();
    }

}

?>