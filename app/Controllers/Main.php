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

    public function teste12_2(){
        $a = true; 

        if($a){
            return redirect()->to('public/main/teste12_3');
        }

        echo view('teste12');
    }

    public function teste12_3(){
        echo 'O texto foi redirecionado com sucesso!';
    }


        // Manipulação de Sessions

    public function teste13(){

            $dados = [
                'nome' => 'Samuel',
                'sobrenome' => 'Alan', 
                'idade' => '20', 
                'email' => 'samuelsantos@gmail.com'
            ]; 

            session()->set($dados);

            echo session()->get('nome'); 

            echo '<pre>';
            print_r(session()->get()); 

            if(session()->has('faculdade')){
                echo 'Sim!';
            } else {
                echo 'Não!';
            }
    }

        // Sessions e Views 

        public function teste14(){
            session()->set([
                'usuario' => 'Ana',
                'email' => 'ana@gmail.com'
            ]);

            echo 'login'; 
             
        }

        public function teste14_1(){
            if(session()->has('usuario')){
                echo 'Esse usuário já está logado';
            } else {
                echo 'Esse usuário não possui login';
            }
        }

        public function teste14_2(){
            session()->stop();

            return redirect()->to(site_url('public/main'));
        }

        // DataBase no CodeIgniter

        public function teste15(){
            $db = \Config\Database::connect();

            $resultados = $db->query("SELECT * FROM clientes")->getResultObject();  // Também pode ser getresultArray(); 

            $db->close(); 

            echo '<pre>';
            print_r($resultados);
        
        }

        // Manipulando dados de um banco de dados

        public function teste16(){

            $db = db_connect(); 
            $dados = $db->query("SELECT * FROM clientes");
            $db->close();

            foreach($dados->getResult() as $row){
                echo  '<p>'. $row->nome . '</p>'; 
            }
        
        }

        // Apresentar dados em um banco de dados

        public function teste17($id, $nome){

            $params = [
               'id' => $id,
                'nome'=> $nome
            ];


            $db = db_connect(); 
            $dados = $db->query("SELECT * FROM clientes WHERE idclientes = :id: AND nome = :nome:", $params)->getResultObject(); 
            $db->close(); 

            echo '<pre>';
            print_r($dados);

        }

        // Inserindo dados em um Banco de Dados 

        public function teste18(){
           
            return view('formulario'); 

        }

        public function novoCliente(){
            
                $nome = $this->request->getPost('nome');
                $email = $this->request->getPost('email');

                $params = [
                    'nome' => $nome,
                    'email' => $email
                ];

                $db = db_connect();

                $db->query("
                    INSERT INTO clientes(nome, email) VALUES(
                        :nome:,
                        :email:
                    )
                ", $params);
                
                $db->close();

                return  'formulario'; 

        }


        // Todo List 


        public function teste19(){

            return view('LIST'); 

        }

        public function getLists(){

            $db = db_connect();
            $dados = $db->query("SELECT * FROM rotina")->getResultObject(); 
            $db->close(); 

            return $dados; 

        }

        public function TODOLIST(){

            $diario = $this->request->getPost('diario');
            $mensal = $this->request->getPost('mensal');
            $anual = $this->request->getPost('anual');

            $params = [
                'diario' => $diario,
                'mensal' => $mensal,
                'anual' => $anual
            ];

            $db = db_connect(); 

            $db->query("
                INSERT INTO rotina(diario, mensal, anual) VALUES (
                    :diario:,
                    :mensal:,
                    :anual:
                )
            ", $params);

            $db->close(); 


            $dados['teste'] = $this->getLists();
            echo view('LIST', $dados);  

        }

        public function delete(){
        
            
            //$pdo = new PDO('mysql:host=localhost;dbname=samueldatabase','samuel','Sesc2002*');

             if(isset($_GET['delete'])){
                 $id = (int)$_GET['delete'];
                 $pdo->exec("DELETE FROM rotina WHERE id=$id");
             echo 'deletado com sucesso';            
             }

             $fetchrotina = $sql->fetchAll(); 
             

             foreach ($fetchrotina as $key => $value) {
             echo '<a href="?delete='.$value['id'].'"></a>'.$value['diario'] . '|' .$value['mensal'] . '|' .$value['anual']; 
             echo '<hr>';
             

            
             }

        }





}