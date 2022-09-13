<?php 

namespace App\Libraries\Biblioteca;

class Livros{
    public $produto;
    public $preco;

    public function informacao(){
        return "Produto: $this->produto | Preço: $this->preco dólares"; 
    }
}