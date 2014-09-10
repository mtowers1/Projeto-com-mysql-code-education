<form class="form-horizontal" method="post" action="<?php echo $server; ?>recebecontato">
    <div class="control-group">
        <label class="control-label" for="inputNome">Nome</label>
        <div class="controls">
            <input type="text" id="inputNome" name="inputNome" placeholder="Nome" required="required">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
            <input type="text" id="inputEmail" name="inputEmail" placeholder="Email" required="required">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputAssunto">Assunto</label>
        <div class="controls">
            <input type="text" id="inputAssunto" name="inputAssunto" placeholder="Assunto" required="required">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputMensagem" required="required">Mensagem</label>
        <div class="controls">
            <textarea rows="3" id="inputMensagem" name="inputMensagem" placeholder="Mensagem"></textarea> <br />
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>
</form>

