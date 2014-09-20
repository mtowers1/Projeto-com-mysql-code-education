<?php if(isset($erro) && $erro !=""){ echo '<div class="alert alert-danger" role="alert">'.$erro.'</div>';}?>
<form name="comecar" id="comecar" method="POST" action="">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Área Administrativa - Digite seu usuário e senha para acessar!	</h3>
            </div>

            <br />
            <div class="input-group input-group-lg">
		      <span class="input-group-addon bb">
		       LOGIN
		      </span>
                <input type="text" name="login" id="login" value="" class="form-control" placeholder="Digite seu login" required="required">
            </div>
            <br />

            <div class="input-group input-group-lg">
		      <span class="input-group-addon  bb">
		       SENHA
		      </span>
                <input type="password" name="senha" id="senha" value="" class="form-control" placeholder="Digite sua senha" required="required">
            </div>
            <br />

            <br />
            <button type="submit" class="btn btn-primary btn-lg btn-block">Acessar</button>
            <br /><br />


        </div>

    </form>