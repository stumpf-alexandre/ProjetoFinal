<?php
  include '../cls/usuarioClass.php';

  $usuario = new StdClass();

  $usuario -> nome = $_POST['nome'];
  $usuario -> email = $_POST['email'];
  $usuario -> usuario = $_POST['usuario'];
  $usuario -> senha = $_POST['senha'];
 

  $usuarios = new usuarioClass();
  $usuarios -> insere($usuario);
?>