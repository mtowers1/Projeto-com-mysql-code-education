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
                echo ListaMenu($conexao,$server);
                ?>

            </ul>
            <form class="navbar-form navbar-left" role="search" method="post">
                <div class="form-group">
                    <input type="text" name="pesquisar" value="<?php if(!empty($_POST['pesquisar'])){echo $_POST['pesquisar'] ;} ?>" class="form-control" placeholder="Pesquisar">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="mae">
    <?php
    if(empty($_POST['pesquisar'])){
    $resultado=BuscaConteudo($conexao,$id); ?>
    <h1><?php echo ucfirst(str_replace('cos','ços',$resultado['SITE_MENU'])) ; ?></h1> <br />
    <?php
    echo str_replace('\n','<br>',$resultado['CONTEUDO']);

        if($id==5){
            require_once('contato.php');
        }

        if($id==6){
            require_once('recebecontato.php');
        }

    }
    else{
        Pesquisa($conexao, $_POST['pesquisar'], $server);
    }
    ?>
</div>