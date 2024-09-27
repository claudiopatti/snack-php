<?php 
    $partite =  [
        [
            'squadraCasa' => 'Inter',
            'squadraTrasferta' => 'Roma',
            'punteggioCasa'=> 2,
            'punteggioTrasferta'=> 3,
        ],
        [
            'squadraCasa' => 'Milan',
            'squadraTrasferta' => 'Genoa',
            'punteggioCasa'=> 5,
            'punteggioTrasferta'=> 4,
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack PHP</title>
    </head>
    <body>
        <div>
            <?php foreach($partite as $partita) {

            ?>
            <p>
                il risultato della partita è: <?php echo $partita['squadraCasa'].'-'. $partita['squadraTrasferta'].':'.$partita['punteggioCasa'].'/'.$partita['punteggioTrasferta'] ?>
            </p>

            <?php 

                }

            ?>


        </div>
    </body>
</html>