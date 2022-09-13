<?php 

namespace App\Libraries\Biblioteca;

class Componentes{

    public function cliente($cliente){
    $data = [
        'nome' => $cliente['nome'],
        'email'=> $cliente['email']
    ];

       return view('pagina3', $data);
        
      
    }
}