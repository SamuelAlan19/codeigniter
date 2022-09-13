<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach and if</title>
</head>
<body>
    
    <!-- Foreach --> 

    <ul>

        <?php foreach ($marcas as $marca){
        echo "<li>$marca</li>";}
        ?>

    </ul>

    <!-- If Clause and For -->

    <ul>
        <?php for ($i=0; $i<count($marcas); $i++): ?>

    <?php if($marcas[$i] == 'Ferrari'):?>
        <li><?php echo $marcas[$i]?></li>
    <?php endif; ?>

        <?php endfor;?>

    </ul>


</body>
</html>