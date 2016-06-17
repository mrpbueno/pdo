
<h2>Lista de alunos</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Nome</th>
        <th>#</th>
        <th>#</th>
        <th>#</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $alunos = getAlunos();
    foreach($alunos as $aluno): ?>
        <tr>
            <td><?=$aluno['nome']?></td>
            <td><a href="aluno/<?=$aluno['id']?>"><span class="glyphicon glyphicon-search"></span></a></td>
            <td><a href="editar/<?=$aluno['id']?>"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td><a href="apagar/<?=$aluno['id']?>"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>