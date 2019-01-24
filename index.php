<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="utf-8" />
    <title>Table de Multiplication</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>

<body>
    <header>
        <h1>TABLE DE MULTIPLICATTION</h1>
    </header>
    <div id="fontTab" >
    <form id="TDM" method="GET" action="index.php">
        <select name="table" id="tableau">
            <option  value="faite votre choix">faite votre choix</option>
            <option  value="0">X0</option>
            <option  value="1">X1</option>
            <option  value="2">X2</option>
            <option  value="3">X3</option>
            <option  value="4">X4</option>
            <option  value="5">X5</option>
            <option  value="6">X6</option>
            <option  value="7">X7</option>
            <option  value="8">X8</option>
            <option  value="9">X9</option>
            <option  value="10">X10</option>
        </select><br>
        <h2>Choix de la table à afficher</h2>
        <input id="but" type="submit" name="button" value="voir la table">
    </div>

    </form>

<div id="result"></div>

    <script src="main.js"></script>
</body>
</html>