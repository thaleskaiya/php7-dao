<?php

require_once("config.php");

//Carrega um usuario.
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("bru");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("bruninha","1234567890");

echo $usuario;
?>