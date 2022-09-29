<?php
Namespace App\Libraries\Biblioteca; 

    Class Lojas{
    public $nome_completo;
    public $nome;
    public $apelido;

    public function __construct()
    {
        $this->nome_completo = $this->nome . ' ' . $this->apelido; 
    }
}