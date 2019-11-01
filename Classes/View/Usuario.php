<?php include_once("../../Conexao/Conexao.php"); ?>
<?php include_once("../Model/Usuario.php"); ?>
<?php include_once("../Model/DAOUsuario.php"); ?>
<?php
	class Usuario
	{
		//INICIALIZA A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//O OBJETO QUE OS METODOS VAO USAR PARA FAZER AS OPEAÇÕES NO BANCO DE DADOS
		$usuario = new Usuario();
		
		INSERIR O USUARIO
		$daoUsuario->inserirUsuario($usuario);
		
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//LOCALIZA O USUARIO UM NO BANCO DE DADOS
		$usuario = localizarUsuario(1)
		
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//altera o usuario
		$daoUsuario->alterarUsuario($usuario);
		
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//EXCLUI O USUARIO 1
		$daoUsuario->excluirUsuario(1);
		
	}//CLASS
?>