<?php

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$nota = isset($_POST['nota']) ? $_POST['nota'] : null;
$id = isset(getPath()[2]) ? getPath()[2] : null;
$aluno = getAluno($id);

// Verifica se uma das variáveis não estão vazias
if(!empty($nome) || !empty($nota)) {
    // Salva e redireciona para home
    updateAluno($id, $nome, $nota);
    header("Location: http://{$_SERVER['HTTP_HOST']}");
    exit;
}
?>
<h2>Edição de Aluno</h2>
<form method="post"">
<div class="col-lg-6">
    <div class="form-group">
        <label>Nome:</label>
        <input class="form-control" name="nome" value="<?=$aluno['nome']?>" required>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-group">
        <label>Nota:</label>
        <input class="form-control" name="nota" value="<?=$aluno['nota']?>" type="number" required>
    </div>
</div>
<div class="col-lg-12">
    <button type="submit" class="btn btn-default">Salvar</button>
</div>
</form>
