<?php

function getPath()
{
    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    return explode('/',$url['path']);
}

function validaRota($path, $rotas)
{
    if(in_array($path,$rotas)){
        require_once($path.".php");
    }
    else {
        require_once('404.php');
    }
}

function getAlunos()
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM alunos";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTopAlunos()
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM alunos ORDER BY nota DESC LIMIT 3";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}