<?php
namespace App\Libraries\Biblioteca;
// use Classes\Model\Inserent;
// use CodeIgniter\Controller;

Class Lojas{
    public $nome_completo;
    public $nome;
    public $apelido;

    public function __construct()
    {
        $this->nome_completo = $this->nome . ' ' . $this->apelido; 
    }
}