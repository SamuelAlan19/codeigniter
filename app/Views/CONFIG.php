<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

    $query_config="SELECT id, diario, mensal, anual FROM rotina ORDER BY id DESC";
    $result_config =  $conn-> prepare($query_config);
    $result_config -> execute();

    while($row_config = $result_config-> fetch(PDO::FETCH_ASSOC)){
        var_dump($row_config); 
    }
    
    
    
    
    
    ?>






</body>
</html>