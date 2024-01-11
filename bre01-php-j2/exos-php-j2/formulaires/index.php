<?php

$nombre1 = 0;

$nombre2 = 0;

$operation = null;

if(isset($_POST["nombre1"]) && !empty($_POST["nombre1"]))
{
    $nombre1 = $_POST["nombre1"];

}

if(isset($_POST["nombre2"]) && !empty($_POST["nombre2"]))
{
    $nombre2 = $_POST["nombre1"];
}


function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;

}

function substract(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;

}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;

}

function divide(int $nb1, int $nb2) : ?int
{
    if($nb2 === 0)
    {
        echo "<h1>DIVISION PAR 0 IMPOSSIBLE!!!!</h1>";
        return null;
    }
    return $nb1 / $nb2;
}

function modulo(int $nb1, int $nb2) : ?int
{ 
    if($nb2 === 0)
    {
        echo "<h1>DIVISION PAR 0 IMPOSSIBLE!!!!</h1>";
        return null;
    }
    return $nb1 % $nb2;
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Le résultat de votre opération est 
        <?php
         if(isset($_POST["operation"]) && !empty($_POST["operation"]))
         {
             if($_POST["operation"] === "multiplication")
             {
                 echo multiply($_POST["nombre1"], $_POST["nombre2"]);
             }
             elseif($_POST["operation"] === "division")
             {
                 echo divide($_POST["nombre1"], $_POST["nombre2"]);
         
             }
             elseif($_POST["operation"] === "addition")
             {
                 echo add($_POST["nombre1"], $_POST["nombre2"]);
         
             }
             elseif($_POST["operation"] === "soustraction")
             {
                 echo substract($_POST["nombre1"], $_POST["nombre2"]);
         
             }
             elseif($_POST["operation"] === "modulo")
             {
                 echo modulo($_POST["nombre1"], $_POST["nombre2"]);
         
             }
         
         }
         ?>
    </h1>
<form action="index.php" method="POST">
    <fieldset>
        <label for="nombre1">Nombre 1</label>
        <input type="text" name="nombre1" id="nombre1" required />
    </fieldset>
    <fieldset>
        <label for="nombre2">nombre 2</label>
        <input type="text" name="nombre2" id="nombre2" required/>
    </fieldset>
    <select name="operation" id="operation" required>
        <option value="">--Choisissez l'opéaration à réaliser--</option>
        <option value="multiplication">multiplication</option>
        <option value="division">division</option>
        <option value="addition">addition</option>
        <option value="soustraction">soustraction</option>
        <option value="modulo">modulo</option>
    </select>
    <button type="submit">Calculer</button>
</form>
    
</body>
</html>