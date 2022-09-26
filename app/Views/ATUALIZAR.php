<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

                <?php 
                helper('form'); 
                echo form_open('public/main/update02')
                ?>
<header class="col p-3 my-3 text-center bg-light">
    <h1>Altere suas Tarefas</h1> 
</header>
              


    <div class="container">
        <div class="row">
            <div class="col offset-2">  
                <input type="hidden" name="idrotina" value="<?= $testar->idrotina?>"> 
                &nbsp; <input type="text" placeholder="Diário" name= "diario" class="text-center my-3 p-1" value = "<?php echo $testar->diario?>">
                &nbsp; <input type="text" placeholder="Mensal" name= "mensal" class="text-center my-3 p-1" value=  "<?php echo $testar->mensal?>"> 
                &nbsp; <input type="text" placeholder="Anual" name= "anual" class="text-center my-3 p-1" value= "<?php echo $testar->anual?>">
                <a href="<?= site_url('public/main/update02' . $testar->idrotina)?>"> <input type="submit" value="Atualizar" class=" btn btn-primary"></a>
            </div>
        </div>
    </div>

    <?php echo form_close();?>

    


</body>

</html>