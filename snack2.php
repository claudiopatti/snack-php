<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
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
            <?php foreach ($posts as $key=> $valore) {

            ?>

            <ul>
            <?php foreach ($valore as $post) { 
            ?>
            <p>
                <?php echo $key ?>
            </p>

            <li>
                <?php echo $post['title'] ?>

            </li>
            <li>
                <?php echo $post['author'] ?>

            </li>
            <li>
                <?php echo $post['text'] ?>

            </li>
            <?php
            }
            ?>
            </ul>

            <?php
            }
            ?>
        </div>
    </body>
</html>