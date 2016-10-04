<?php
class ContatoController extends MainController
{
	// URL: dominio.com/exemplo/
	public function index() {
	
		// Carrega o modelo
		#modelo = $this->load_model('contato/contato-model');
		
		// Carrega o view
        require_once ABSPATH . '/views/_includes/header.php';
        require_once ABSPATH . '/views/_includes/menu.php';
		require_once ABSPATH . '/views/contato/contato-view.php';
        require_once ABSPATH . '/views/_includes/header.php';
	}
}