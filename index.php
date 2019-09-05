<!-- creare una pagina in PHP che legga in ingresso 3 parametri numerici (in GET) 
che rappresentano le 3 dimensioni di un parallelepipedo: lunghezza, larghezza, altezza;
stampare le 3 dimensioni e calcolare il volume della figura (lun x lar x alt) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $lunghezza = $_GET["lunghezza"];
    $larghezza = $_GET["larghezza"];
    $altezza = $_GET["altezza"];
    
    
    ?>

    <title>php-get-params</title>
</head>
<body>

    <div>
        <h2><?php echo "lunghezza=".$lunghezza."<br>"."larghezza=".$larghezza."<br>"."altezza=".$altezza;?></h2>
        <h1><?php echo "il volume del parallelepipedo è: ".$lunghezza * $larghezza * $altezza."m^3"; ?> </h1>
    
    </div>
    
</body>
</html>
