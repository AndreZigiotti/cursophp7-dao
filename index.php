<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("a");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao", "qwerty");
//echo $usuario;

//INSERT novo usuario
//$aluno = new Usuario("aluno2", "senhaAluno2");
//$aluno->insert();
//echo $aluno;

//UPDATE

//$usuario = new Usuario();

//$usuario->loadById(8);
//$usuario->update('professor', 'prof123');

//echo $usuario;

//DELETE
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;

?>