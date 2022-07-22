<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
$games = [
    [
        'hometeam' => 'Varese',
        'awayteam' => 'Sassari',
        'homepoints' => '96',
        'awaypoints' => '110'
    ],
    [
        'hometeam' => 'Napoli',
        'awayteam' => 'Pesaro',
        'homepoints' => '84',
        'awaypoints' => '85'
    ],
    [
        'hometeam' => 'Virtus Bologna',
        'awayteam' => 'Brescia',
        'homepoints' => '79',
        'awaypoints' => '57'
    ],
    [
        'hometeam' => 'Brindisi',
        'awayteam' => 'Derthona',
        'homepoints' => '82',
        'awaypoints' => '99'
    ],
    [
        'hometeam' => 'Venezia',
        'awayteam' => 'Milano',
        'homepoints' => '69',
        'awaypoints' => '74'
    ],
    [
        'hometeam' => 'Trieste',
        'awayteam' => 'Universo Treviso',
        'homepoints' => '84',
        'awaypoints' => '83'
    ],
    [
        'hometeam' => 'Cremona',
        'awayteam' => 'Trento',
        'homepoints' => '112',
        'awaypoints' => '105'
    ],
    [
        'hometeam' => 'Reggio Emilia',
        'awayteam' => 'Fortitudo Bologna',
        'homepoints' => '88',
        'awaypoints' => '77'
    ],
]
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

<h2>CALENDARIO 30^ GIORNATA LEGA BASKET SERIE A</h2>

<ul>
    <?php for($i = 0; $i < count($games); $i++) { ?>
        <?php $thisGame = $games[$i]; ?>

        <li>
            <h3><?php echo $thisGame['hometeam'] . ' - ' . $thisGame['awayteam'] . ' | ' . $thisGame['homepoints'] . '-' . $thisGame['awaypoints']; ?></h3>
        </li>

    <?php } ?>
</ul>

</body>
</html>