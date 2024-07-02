<?php
require_once 'database.php';
require_once 'usuario.php';

// Trazer o que há no banco, e mapear para a aplicação
class UsuarioDAO {
    private $bancoDeDados;

    public function __construct() {
        $this->bancoDeDados = new Database()->getConexao();
    }

    public function getContatos() {
        
    }

    public function getContatoByNome() {

    }

    public function createContato() {

    }

    public function deleteContato() {

    }
}
?>