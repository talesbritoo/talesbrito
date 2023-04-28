<?php
    $hostname = "Localhost";
    $usuario = "root";
    $senha = ""
    $banco = "clientes";

    $conexao = new mysqli($hostname, $usuario, $senha, $banco);

    if(isset($_POST['submit']))
    {
      //print_r($_POST['nome']);
      //print_r($_POST['email']);
      //print_r($_POST['sugestao']);
      //print_r($_POST['mensagem']);

      include_once('clientes.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $sugestao = $_POST['sugestao'];
      $mensagem = $_POST['mensagem'];

      result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, sugestao, mensagem)
      VALUES ($nome, $email, $sugestao, $mensagem)");

    }
?>
