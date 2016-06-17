<?php

$id = isset(getPath()[2]) ? getPath()[2] : null;
$aluno = getAluno($id);
if(isset($_POST['apagar'])){
    apagaAluno($id);
    header("Location: http://{$_SERVER['HTTP_HOST']}");
    exit;
}
?>
<h2>Exclusão de Aluno</h2>
<ul>
    <li><b>Nome:</b> <?=$aluno['nome']?></li>
    <li><b>Nota:</b> <?=$aluno['nota']?></li>
</ul>
<form method="post">
    <button type="submit" name="apagar" class="btn btn-danger">Confirmar</button>
</form>

