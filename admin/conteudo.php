<?php
if(!isset($_SESSION["logado"]) && $_SESSION["logado"] != "m123456"){
    session_destroy();
    header("Location:".$server."admin/login");
    exit();
}
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Home</a></li>-->
                <?php
                echo ListaMenu($conexao,$server, 'admin/');
                ?>

            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php if(isset($erro) && $erro !=""){ echo '<div class="alert alert-success" role="alert">'.$erro.'</div>';}?>
<?php
$resultado=BuscaConteudo($conexao,$id);
?>
<form name="comecar" id="comecar" method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <textarea rows="0" cols="30" class="ckeditor" name="editor" id="editor" required="required"><?php echo $resultado['CONTEUDO'];?></textarea>
    <br />
    <button type="submit" class="btn btn-primary btn-lg btn-block">Atualizar</button>
</form>
<br /><br />

<script src="<?php echo $server;?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>