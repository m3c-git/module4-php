<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Le résultat de  est</h1>
<form action="index.php" method="POST">
    <fieldset>
        <label for="nombre1">Nombre 1</label>
        <input type="text" name="nombre1" id="nombre1" />
    </fieldset>
    <fieldset>
        <label for="nombre2">nombre 2</label>
        <input type="text" name="nombre2" id="nombre2" />
    </fieldset>
    <select name="operation" id="operation">
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