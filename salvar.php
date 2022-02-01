<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNome"]) || empty($_POST["txtContato"]) || empty($_POST["txtEmpresa"])){
        header('Location: index.php?mensagem=erro');
        exit();
    }

    include_once 'model/conexao.php';
    $nome = $_POST["txtNome"];
    $contato = $_POST["txtContato"];
    $empresa = $_POST["txtEmpresa"];

    $frase = $bd->prepare("INSERT INTO pessoa(nome,contato,empresa) VALUES (?,?,?);");
    $resultado = $frase->execute([$nome,$contato,$empresa]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensagem=salvo');
    } else {
        header('Location: index.php?mensagem=error');
        exit();
    }
