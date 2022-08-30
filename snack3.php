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

// Preleviamo tutte le chiavi dell'array
$array_keys = array_keys($posts);

// for(i = 0;i< count(date_array);i++){
//     couynt  = posts[datearray[i]]
// }
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
        <h2>Posts</h2>
        <ul>
            <?php for($i = 0;$i < count($array_keys); $i++) { ?>
            <li>
                <p>In data <?php echo $array_keys[$i] ?></p>
                <ul>
                    <?php for($j = 0;$j < count($posts[$array_keys[$i]]); $j++) { ?>
                    <li>
                        <p>title: <?php echo $posts[$array_keys[$i]][$j]['title'] ?></p>
                        <p>author: <?php echo $posts[$array_keys[$i]][$j]["author"] ?></p>
                        <p>text: <?php echo $posts[$array_keys[$i]][$j]["text"] ?></p>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </body>

</html>