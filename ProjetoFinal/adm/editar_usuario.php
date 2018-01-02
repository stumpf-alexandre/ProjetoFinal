<?php
  require_once '../cls/usuarioClass.php';
  require_once '../cls/conexaoClass.php';

  $usuarios = new usuarioClass();

  $codigo = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $usuarios -> altera($codigo, $nome, $email, $usuario, $senha);
?>