<?php

function getPath()
{
    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    return explode('/',$url['path']);
}

function validaRota($path, $rotas)
{
    if(in_array($path,$rotas)){
        require_once("pages/".$path.".php");
    }
    else {
        require_once('pages/404.php');
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

function getAluno($id)
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM alunos WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function apagaAluno($id)
{
    $conexao = conexaoDB();
    $sql = "DELETE FROM alunos WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->execute();
}

function getTopAlunos()
{
    $conexao = conexaoDB();
    $sql = "SELECT * FROM alunos ORDER BY nota DESC LIMIT 3";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateAluno($id, $nome, $nota)
{
    $conexao = conexaoDB();
    $sql = "UPDATE alunos SET nome = :nome, nota = :nota WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":nota",$nota);
    $stmt->execute();
}

function createAluno($nome, $nota)
{
    $conexao = conexaoDB();
    $sql = "INSERT INTO alunos (nome, nota) VALUES (:nome, :nota)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":nota",$nota);
    $stmt->execute();
}