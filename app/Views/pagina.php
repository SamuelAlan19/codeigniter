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

<h1>Clientes</h1>

<?php foreach($clientes as $cliente):?>
    <div class = "alert bg-light p-3">
        <?= view_cell('\App\Libraries\Biblioteca\Componentes::cliente', ['cliente' => $cliente])?>
    </div>
<?php endforeach;?>
    
</body>
</html>