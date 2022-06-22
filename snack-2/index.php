<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if(strlen($name) < 4){
        echo "accesso negato! il nome deve essere di almeno 4 caratteri.";
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo "accesso negato! formato email non valido.";
    }
    elseif(!ctype_digit($age)){
        echo "accesso negato! l'età non è valida.";
    }
    else{
        echo "accesso riuscito!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <h2>Nome: <input type="text" name="name"></h2>
        <h2>Mail: <input type="text" name="mail"></h2>
        <h2>Età: <input type="text" name="age"></h2>
        
        <button type="submit">login</button>
    </form>
</body>
</html>