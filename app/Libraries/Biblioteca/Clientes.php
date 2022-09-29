<?php namespace App\Libraries\Biblioteca; 

Class Clientes{

    public function todosClientes(){
        $db = db_connect(); 
        $resultados = $db->table('clientes')->get()->getResultObject();
        $db->close(); 
        return $resultados; 
    }


}