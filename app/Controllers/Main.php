<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;
use CodeIgniter\Controller;

class Main extends Controller
{

    public function index(){

        $variavel['nome'] = "Samuel"; 
        $variavel['sobrenome'] = "Alan";
        echo view('pagina1', $variavel); 
        
    }
        
        
    public function teste1(){
        echo 'teste'; 
    }

}
