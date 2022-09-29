<?php namespace App\Models; 

use CodeIgniter\Model; 

Class Teste extends Model{

    protected $table = 'clientes'; 
    protected $primaryKey = 'idclientes';
    protected $returnType = 'object'; 
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['nome', 'email'];










}