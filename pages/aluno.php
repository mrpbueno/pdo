<?php

$id = isset(getPath()[2]) ? getPath()[2] : null;
$aluno = getAluno($id);

?>
<h2>Ficha do Aluno</h2>
<ul>
    <li><b>Nome:</b> <?=$aluno['nome']?></li>
    <li><b>Nota:</b> <?=$aluno['nota']?></li>
</ul>
