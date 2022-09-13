<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

use CodeIgniter\Controller;

use App\Libraries\Biblioteca\Livros;




class Main extends Controller
{

    protected $helpers = array('matematica'); 

    public function index(){

        $variavel['nome'] = "Samuel"; 
        $variavel['sobrenome'] = "Alan";
        echo view('pagina1', $variavel); 
        echo $this->wordCount("Samuel Alan");
        
    }
       
    private function wordCount($word){
        return strlen($word); 
    }

    public function teste1(){
        echo 'teste'; 
    }


    public function teste2(){
        echo adicionar(10, 30);
        echo '</br>';
        echo subtrair(10,30); 
        echo '</br>';
        echo multiplicar(10, 30);
        echo '</br>';
        echo dividir(10,30); 
    }

    public function teste3(){
        $v = new Livros(); 

        $v->produto = "Mangá";
        $v->preco = 10; 
        
        echo $v->informacao(); 
    }
}
