<?php
namespace classes\mapper;
use classes\model\Inserent;
use CodeIgniter\Controller;

Class lojas{
    public $nome_completo;
    public $nome;
    public $apelido;

    public function __construct()
    {
        $this->nome_completo = $this->nome . ' ' . $this->apelido; 
    }
}