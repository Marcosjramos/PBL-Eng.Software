<?php
/**
* 
*/
class HistoricoModel 
{
	
	var $idHistorico;
	var $listaDeServicos;
                
	function __construct($idHistorico)
	{
		# code...
		$this->listaDeServicos = new SplObjectStorage();
		$this->idHistorico = $idHistorico;
	}

	public function getIdHistorico(){
		return $this->idHistorico;
	}

	public function getListaDeServicos(){
		return $this->listaDeServicos;
	}

	public function setIdHistorico($idHistorico){
		$this->idHistorico = $idHistorico;
	}

	public function setListaDeServicos($listaDeServicos){
		return $this->listaDeServicos = $listaDeServicos;
	}

	public function novaOcorrencia($idServico){
		include 'servico-model.php';
		
		$servico = $this->buscarServico($idServico); #não tenho ctz disso

		$this->listaDeServicos->attach($servico);
	}

	public function buscarServico($idServico){
		include 'servico-model.php';
		foreach ($this->listaDeServicos as $servico) {
			# code...
			if($servico->getIdServico() == $idServico){
				return $servico;
			}
		}
		return NULL;
	}
        
        public function create(){
            require './CRUD/Config.inc.php';
            $Dados = ['idHistorico' => $this->idHistorico, 'listaDeServicos' => $this->listaDeServicos];
            $Cadastra = new Create;
            $Cadastra->ExeCreate('historico', $Dados);
        }
        
        public function delete($idHistorico){
            require './CRUD/Config.inc.php';
            $Deleta = new Delete;
            $Deleta->ExeDelete('historico', 'WHERE id =: id', 'id ='.$idHistorico);
        }
        
        public function read($idHistorico){
            require './CRUD/Config.inc.php';
            $Pesquisa = new Read;
            $Pesquisa->ExeRead('historico', 'WHERE id =: id', 'id='.$idHistorico);
        }
        
        public function update($idHistorico){
            $Dados = ['idHistorico' => $this->idHistorico, 'listaDeServicos' => $this->listaDeServicos];
            $Atualiza = new Update;
            $Atualiza->ExeUpdate('hitorico', $Dados, 'WHERE id=: id', 'id ='.$idHistorico);
        }

}?>













