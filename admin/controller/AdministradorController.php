<?php

 
class AdministradorController {

  private $schema = "homerdb";
  private $usuarioTable = "homer";
  private $denunciaTable = "denuncia";
  private $logTable = "log";

  public function exibirLogs() {
    return "SELECT * FROM {$this->schema}.{$this->logTable}";
  }

  public function listarClientes() {
    return "SELECT * FROM {$this->schema}.{$this->usuarioTable}";
  }

  public function banirUsuario( ) {

  }

  public function gerenciarCampanha() {

  }

  public function verificarDenuncia() {
    return "SELECT * FROM {$this->schema}.{$this->denunciaTable}";
  }

  public function excluirDenuncia($id) {
    $denuncia = new Denuncia();
    $denuncia->remover($id);
  }

  public function addArea() {

  }

  public function excluirArea() {

  }
}

?>