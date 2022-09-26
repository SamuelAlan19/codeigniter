<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">




</head>
<body>

    

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class = "text-center">-- TODO LIST --</h1>
               
                <?php 
                helper('form'); 
                echo form_open('public/main/insert') 
                ?>
                   
                

           <div class="col text-center">
                <input type="text" name="diario" placeholder = "diário" class= "text-center">               
                <input type="text" name="mensal" placeholder = "mensal" class= "text-center">
                <input type="text" name="anual" placeholder = "anual" class= "text-center">
                <input type="submit" value="Adicionar">
                <hr>
            </div>

            <table class= "table table-striped">
                <thead class= "thead-dark">
                    <tr class = "text-center"> 
                        <th>ID</th>       
                        <th>Tarefas Diárias</th>
                        <th>Tarefas Mensais</th>
                        <th>Tarefas Anuais</th> 
                        <th></th>
                        <th>Funções</th>        
                    </tr>
                    
                </thead>
                <tbody class = "text-center" > 
                    <?php foreach ($testes as $teste): ?>
                        <tr>
                            <td><?= $teste->idrotina?></td>
                            <td><?= $teste->diario?> &nbsp; </td>
                            <td><?= $teste->mensal?> &nbsp; </td>
                            <td><?= $teste->anual?> &nbsp; </td>
                            <th></th> 
                            <td><a href="<?php echo site_url('public/main/delete/' . $teste->idrotina);?>" class= "btn btn-danger"> Deletar</a>  
                            <a href="<?php echo site_url('public/main/update/' . $teste->idrotina);?>" class= "btn btn-primary"> Atualizar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                <?php echo form_close();?>
                
                
            </div>
        </div>
    </div>

    
      


    
</body>
</html>