<?php
if(isset($_POST['inputEmail']) && isset($_POST['inputNome']) && isset($_POST['inputAssunto']) && isset($_POST['inputMensagem'])){
?>
<div class="alert alert-success">Dados enviados com sucesso, abaixo seguem os dados que você enviou</div><br /><br />
<p class="text-info">Nome: <?php if(isset($_POST['inputNome'])){ echo $_POST['inputNome']; }?> </p>
<p class="text-info">E-mail: <?php if(isset($_POST['inputEmail'])){ echo $_POST['inputEmail'] ;}?> </p>
<p class="text-info">Assunto: <?php if(isset($_POST['inputAssunto'])){ echo $_POST['inputAssunto']; }?> </p>
<p class="text-info">Mensagem: <?php if(isset($_POST['inputMensagem'])){ echo $_POST['inputMensagem'] ;}?> </p>
<?php } else{
    header("Location:".$server);
} ?>