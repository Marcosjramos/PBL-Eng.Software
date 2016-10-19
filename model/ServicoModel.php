<?php

/**
* 
*/
class ServicoModel
{

	private $idServico;
	private $data;
	private $local;
	private $clienteDoServico;
	private $prestadorDoServico;
	private $statusFinal;
	private $contrato;
	private $horario;
	private $valorSugerido;
	
	function __Servico($idServico, $data, $local, $clienteDoServico, $prestadorDoServico, 
		$statusFinal, $contrato, $horario, $valorSugerido)
	{
		# code...
		$this->idServico = $idServico;
		$this->data = $data;
		$this->local = $local;
		$this->clienteDoServico = $clienteDoServico;
		$this->prestadorDoServico = $prestadorDoServico;
		$this->statusFinal = $statusFinal;
		$this->contrato = $contrato;
		$this->horario = $horario;
		$this->valorSugerido = $valorSugerido;
	}

	public function getIdServico(){
		return $this->idServico;
	}

	public function setIdServico($idServico){
		$this->idServico = $idServico;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getLocal(){
		return $this->local;
	}

	public function setLocal($local){
		$this->local = $local;
	}

	public function getClienteDoServico(){
		return $this->clienteDoServico;
	}

	public function setClienteDoServico($clienteDoServico){
		$this->clienteDoServico = $clienteDoServico;
	}

	public function getPrestadorDoServico(){
		return $this->prestadorDoServico;
	}

	public function setPrestadorDoServico($prestadorDoServico){
		$this->prestadorDoServico = $prestadorDoServico;
	}

	public function getStatusFinal(){
		return $this->statusFinal;
	}

	public function setStatusFinal($statusFinal){
		$this->statusFinal = $statusFinal;
	}


	public function getContrato(){
		return $this->contrato;
	}

	public function setContrato($contrato){
		$this->contrato = $contrato;
	}

	public function getHorario(){
		return $this->horario;
	}

	public function setHorario($horario){
		$this->horario = $horario;
	}

	public function getValorSugerido(){
		return $this->valorSugerido;
	}

	public function setValorSugerido($valorSugerido){
		$this->valorSugerido = $valorSugerido;
	}

	public function cancelarContrato(){
		include 'contrato-model.php';

		$id = $this->contrato->getIdContrato();

		if ($this->contrato->cancelarContrato($id)) {
			# code...
			include 'prestador-model.php';
			$this->prestadorDoServico->notificarPrestador(false);
			return true;

		}

		return false;
		

	}

	public function novoServico(){
            require_once 'contrato-model.php';
		$this->contrato->novoContrato();
		
                require_once 'prestador-model.php';
		$this->prestadorDoServico->notificarPrestador(TRUE);
	}


	public function equals($servico){
		if ($this->idServico == $servico->getIdServico() 
                        && $this->data == $servico->getData()  
			&& $this->clienteDoServico == $servico->getClienteDoServico() 
                        && $this->prestadorDoServico == $servico->getPrestadorDoServico() 
			&& $this->contrato == $servico->getContrato() && $this->horario == $servico->getHorario()) {
			# code...
			return TRUE;
		}
		return FALSE;
	}
        
        public function create(){
            require './CRUD/Config.inc.php';
            $Dados = ['idServico' => $this->idServico, 'data' => $this->data, 'local' => $this->local, 'clienteDoServico' => $this->clienteDoServico,
                      'prestadorDoServico' => $this->prestadorDoServico, 'statusFinal' => $this->statusFinal, 'horario' => $this->horario,  
                      'valorSugerido' => $this->valorSugerido ];
            $Cadastra = new Create;
            $Cadastra->ExeCreate('servico', $Dados);
        }
        
        public function delete($idServico){
            require './CRUD/Config.inc.php';
            $Deleta = new Delete;
            $Deleta->ExeDelete('servico', 'WHERE id =: id', 'id ='.$idServico);
        }
        
        public function read($idServico){
            require './CRUD/Config.inc.php';
            $Pesquisa = new Read;
            $Pesquisa->ExeRead('servico', 'WHERE id =: id', 'id='.$idServico);
        }
        
        public function update($idServico){
            $Dados = ['idServico' => $this->idServico, 'data' => $this->data, 'local' => $this->local, 'clienteDoServico' => $this->clienteDoServico,
                      'prestadorDoServico' => $this->prestadorDoServico, 'statusFinal' => $this->statusFinal, 'horario' => $this->horario,  
                      'valorSugerido' => $this->valorSugerido ];
            $Atualiza = new Update;
            $Atualiza->ExeUpdate('servico', $Dados, 'WHERE id=: id', 'id ='.$idServico);
        }

} ?>