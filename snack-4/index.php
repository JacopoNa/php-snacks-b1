<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

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
        $paragraph = 'Asfalto infuocato a Le Castellet ed è subito sfida Ferrari-Red Bull nelle prime prove libere del GP di Francia. 
        Sui 58 gradi del manto del circuito francese, il miglior tempo delle FP1 lo ha stabilito Charles Leclerc in 1’33”930 davanti a Max Verstappen, staccato di 91 millesimi dalla rossa.
        Carlos Sainz ha chiuso terzo a 3 decimi, ma per lo spagnolo è arrivata l’ufficialità della penalità in griglia di partenza nel GP di domenica: per ora i posti di arretramento sono 10 per il cambio della centralina, 
        ma questo è il preludio al cambio delle altre componenti della power unit che lo costringeranno a partire dal fondo. 
        La sessione ha confermato la velocità delle prime due squadre del campionato, che hanno girato per provare le novità aerodinamiche di affinamento del fondo (la Ferrari con Leclerc) per adattarsi a questo tracciato. 
        Dietro di loro la Mercedes di George Russell, che ha il quarto tempo assoluto. 
        I tedeschi dovrebbero essere più in palla su questa pista e la conferma è arrivata anche dal nono posto di Nick De Vries, che in questa sessione ha girato al posto di Lewis Hamilton (da regolamento le squadre devono far girare un giovane del vivaio in un paio di FP1 all’anno).';
        
        echo $paragraph;

        $myArray = explode('.', $paragraph);
        var_dump($myArray);
    ?> 

    <?php for($i = 0; $i < count($myArray); $i++) {?>
        <p><?php echo $thisPar = $myArray[$i];?></p>
    <?php }?>

</body>
</html>