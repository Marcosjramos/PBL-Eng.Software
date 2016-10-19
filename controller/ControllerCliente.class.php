<?php

/**
 * <b>ControllerCliente.class.php</b> classe responsável por interpretar as entradas do cliente do sistema. Ou classe controladora
 * do cliente no sistema.
 * Versão 1.0
 * Data de Criação: 12/10/2016
 * Classe responsável por 
 * @copyright (c) 2016, SKYNERD - Universidade Estadual de Feira de Santana (UEFS), Brasil
 * [Lenington Rios]
 */
class ControllerCliente {
	

	public function __construct($parametros){
		if(!empty($parametros)){
			
		}
	}

	/**
     * <b>Cadastrar Cliente:</b> método responsável por efetuar o cadastro do cliente no sistema
     * 
     * @param STRING $nome = nome completo do cliente
     * @param STRING $cpf = CPF do cliente
     * @param STRING $email = email do cliente para validação do sistema
     * @param STRING $senha = senha do cliente
     * @param CHAR $sexo = sexo do cliente 'M' (masculino) OR 'F' (feminino)
     * @param ARRAY $endereco = endereço do cliente. Exemplo: [rua=>'nome da rua', cep=>'numero do cep', numero=>'número da casa',...]
     * @param STRING $telefone = número do telefone do cliente
     */
	public function cadastrarCliente($nome, $cpf, $email, $senha, $sexo, $endereco,  $telefone){

	}

	/** 
	 * <b>Fazer Login:</b> método responsável por efetuar o login do usuário no sistema
     * 
     * @param STRING $email = email para validação do cliente
     * @param STRING $senha = senha do cliente
	 */
	public function fazerLogin($email, $senha){

	}

	/** 
	 * <b>Editar Perfil:</b> método responsável por fazer a chamada para edição do perfil no sistema
     * 
	 */
	public function editarPerfil(){

	}

	/** 
	 * <b>Cadastrar Atualizar Conta:</b> atualizar a conta do usuário, caso ele queira mudar de serviços no sistema
	 * @return BOOLEAN $ = 
	 */
	public function atualizarConta(){

		
	}

	/** 
	 * <b>Denunciar Perfil:</b> método responsável por efetuar uma denúncia de um usuário no sistema
     * 
     * @param INT $idUsuario = número do id do usuário que será reportado
     * @param STRING $mensagem = mensagem da denúncia informada pelo usuário
	 */
	public function denunciarPerfil($idUsuario, $mensagem){

	}

	/** 
	 * <b>Excluir Perfil:</b> método responsável por excluir o perfil do usuário
     * 
     * @param INT $idUsuario = número do id do usuário que deseja excluir a conta
	 */
	public function excluirPerfil($idUsuario){

	}

	/** 
	 * <b>Verificar Senha:</b> método responsável por verificar a senha do usuário
     * 
     * @return BOOLEAN = TRUE se a senha for a mesma OR FALSE.
	 */
	private function verificarSenha(){

	}

	/** 
	 * <b>Pesquisar Prestadores:</b> método responsável por efetuar uma busca no sistema de prestadores, informando a
     * área de atuação e o endereço (localidade)
     * @param STRING $areaAtuacao = tipo de serviço 
     * @param ARRAY $endereco = endereço/localidade. Exemplo: [rua=>'nome da rua', cep=>'numero do cep', numero=>'número da casa',...]
	 */
	public function pesquisarPrestadores($areaAtuacao, $endereco){

	}

	/** 
	 * <b>Avaliar Cliente:</b> método que efetua avaliação de um cliente para um outro usuário
     * @param INT $idUsuario = número do ID que será avaliado
     * @param STRING $mensagem = mensagem da avaliação (não obrigatória)
	 */
	public function avaliarCliente($idUsuario, $mensagem = null){

	}

	/** 
	 * <b>Recomendar Prestador:</b> método responsável por fazer recomendações de prestadores para amigos
     * @param INT $idUsuario = número de ID do usuário/prestador que será recomendado
	 */
	public function recomendarPrestador($idUsuario){

	}

	/** 
	 * <b>Adicionar Favorito:</b> método responsável por adicionar um favorito na lista de favoristos do usuário
     * @param INT $idUsuario = número do ID do usuário favoritado
	 */
	public function adicionarFavorito($idUsuario){

	}

	/** 
	 * <b>Remover Favorito:</b> método responsável por remover um favorito da lista de favoritos do usuário
     * @param INT $idUsuario = número do ID do usuário favoritado
	 */
	public function removerFavorito($idUsuario){

	}

	/** 
	 * <b>Publicar Anúncio de Sugestão:</b> publicar um anúncio de sugestão
     * @param STRING $titulo = título do anúncio
     * @param STRING $descricao = o descritívo do anúncio
     * @param DOUBLE $valorMedio = valor médio do anúncio
	 */
	public function publicarAnuncioSugestao($titulo, $descricao, $valorMedio){

	}

	/** 
	 * <b>Publicar Anúncio de Serviço:</b> publicar anúncio de serviço
     * @param STRING $titulo = título do anúncio
     * @param STRING $descricao = descritivo do anúncio
	 */
	public function publicarAnuncioServico($titulo, $descricao){

	}
}