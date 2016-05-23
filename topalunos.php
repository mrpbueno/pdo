<h2>Top 3 alunos</h2>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Nota</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $alunos = getTopAlunos();
    foreach($alunos as $aluno){
        echo "<tr>";
        echo "<td>".$aluno['nome']."</td>";
        echo "<td>".$aluno['nota']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>