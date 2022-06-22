<?php
    $partite = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospiti' => 60
    ],
    [
        'casa' => 'Virtus Bologna',
        'ospite' => 'Pesaro',
        'punti_casa' => 40,
        'punti_ospiti' => 52,
    ],
    [
        'casa' => 'Roma',
        'ospite' => 'Lazio',
        'punti_casa' => 66,
        'punti_ospiti' => 91,
    ],
    [
        'casa' => 'Trieste',
        'ospite' => 'Torino',
        'punti_casa' => 80,
        'punti_ospiti' => 33,
    ],
    [
        'casa' => 'Livorno',
        'ospite' => 'Cremona',
        'punti_casa' => 64,
        'punti_ospiti' => 62,
    ],
    [
        'casa' => 'Napoli',
        'ospite' => 'Ancona',
        'punti_casa' => 90,
        'punti_ospiti' => 58,
    ],
];

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
    <h1>Partite:</h1>
        <?php 
        for ($i=0; $i < (count($partite)) ; $i++) { ?>
            <h4><?php echo "{$partite[$i]['casa']} - {$partite[$i]['ospite']} | {$partite[$i]['punti_casa']} - {$partite[$i]['punti_ospiti']}"; ?></h4>
        <?php } ?>
</body>
</html>