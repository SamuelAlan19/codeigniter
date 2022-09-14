<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

use CodeIgniter\Controller;

use App\Libraries\Biblioteca\Livros;




class Main extends Controller
{

        // Helpers 

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

        // URL

    public function teste1(){
        echo 'teste'; 
    }

        // Metodos e Helper 

    public function teste2(){
        echo adicionar(10, 30);
        echo '</br>';
        echo subtrair(10,30); 
        echo '</br>';
        echo multiplicar(10, 30);
        echo '</br>';
        echo dividir(10,30); 
    }

        // Libraries e metodo

    public function teste3(){
        $v = new Livros(); 

        $v->produto = "Mangá";
        $v->preco = 10; 
        
        echo $v->informacao(); 
    }

        // Foreach, if clause e laço for

    public function teste4(){
        $marcas = [
            'Audi',
            'Ferrari',
            'Maclaren',
            'Mercedes'
        ];

        echo view('pagina2', ['marcas' => $marcas]); 
    }

        // Referências views e libraries 

    public function teste5(){

        $clientes = [
        [
            'nome' => "João Barbosa de Lima",
            'email' => "joaolima@sescmg.com.br"
        ],
        [
            'nome' => "Felipe Melo Brito",
            'email' => "felipebrito@sescmg.com.br"
        ],
        [
            'nome' => "Helena de Souza Castilho",
            'email' => "helenacastilho@sescmg.com.br"
        ]
        ]; 

        echo view('pagina', ['clientes' => $clientes] );
    }

        // Secctions 

    public function teste6(){

        echo view('pagina4'); 
    }

        // View Renderer  

    public function teste7(){
        
        $dados = [
            'nome' => 'Samuel',
            'sobrenome' => 'Alan'
        ];

        $r = \Config\Services::renderer();
        echo $r->setData($dados)->render('pagina5'); 
    }

        // View Parser 

    public function teste8(){

        $p = \Config\Services::parser();
        $p->setData([
            'frase' => 'Frase realizada pelo parser.',
            'titulo'=> 'Título colocado pelo parser.'
        ]); 

        echo $p->render('pagina6'); 

    }

        // Listando com maior facilidade

    public function teste9(){
        $p = \Config\Services::parser();
        $p->setData([
                'titulo' => 'Listando mais facilmente o foreach',
                'nomes' => [
                    ['nome' => 'joão Paulo'],
                    ['nome' => 'Carlos Alberto'],
                    ['nome' => 'Ana Lúcia']

                ],
                'email' => [
                    ['e-mail' => 'samuelsantos@gmail.com']
                ],

                'admin' => true
            ]);

            echo $p->render ('pagina7');
    }

            // Matriz e Tabela

    public function teste10(){
        $tabela = new \CodeIgniter\View\Table();

        $template = [
            'table_open' => '<table class="table table-striped">',
            'thead_open' => '<thead class="thead-dark">',
        ];

        $tabela->setTemplate($template); 

        $data = [
            ['Name', 'Color', 'Size'],
            ['Fred', 'Red', 'Small'],
            ['Mary', 'Blue', 'Large'],
            ['Jhon', 'Freen', 'Medium'],
        ];

        echo view('pagina8', ['tabela' => $tabela -> generate($data)]);

    }

        // Imagem com Assets

    public function teste11(){

        echo view('pagina9'); 

    }

            // Trabalhando com links 

    public function teste12(){
        echo view('home');

    }

    public function teste12_1(){
        echo view('servicos'); 
    }




}
