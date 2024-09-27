<?php 
    $numeberRandom =  [
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
            <?php
                for ($i=0; $i < 15; $i++) { 
                    $num = rand(1,100);
                    if (!in_array ($num, $numeberRandom)  ) {
                        $numeberRandom[] = $num;
                    }
                    else {
                        $i--;
                    };
                    
                };

            
            ?>

            <p>
                <?php var_dump($numeberRandom) ?>
            </p>

            <div>
                <?php foreach($numeberRandom as $number) {
                ?>

                <ul>
                    <li>
                    <?php echo $number?>
                    </li>
                </ul>
                <?php 

                    }

                ?>


            </div>
        </div>
    </body>
</html>