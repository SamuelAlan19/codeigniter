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
                echo form_open('public/main/TODOLIST')
                ?>

            <div class="col text-center">
                <input type="text" name="diario" placeholder = "diário">               
                <input type="text" name="mensal" placeholder = "mensal">
                <input type="text" name="anual" placeholder = "anual">
                <input type="submit" value="Adicionar">
                <hr>
            </div>

            <table class= "table table-striped">
                <thead class= "thead-dark">
                    <tr class = "text-center">
                        <th>Tarefas Diárias <input type="checkbox"></th>
                        <th>Tarefas Mensais</th>
                        <th>Tarefas Anuais</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class = "text-center" >
                        <?php foreach ($teste as $testes): ?>
                            <tr>
                                <td><input type="hidden"><?= $testes->diario?> &nbsp; <input type="checkbox"> </td>
                                <td><?= $testes->mensal?> &nbsp; <input type="checkbox"></td>
                                <td><?= $testes->anual?> &nbsp; <input type="checkbox"></td>
                                <td><input type="submit" value="Deletar"> <input type="submit" value="Atualizar"></td>
                            </tr>
                        <?php endforeach; ?> 

                    
                           


            </table>
            
   
                <?php echo form_close();?>
                
                
            </div>
        </div>
    </div>

    
      


    
</body>
</html>