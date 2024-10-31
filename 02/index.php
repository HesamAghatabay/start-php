<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 02</title>
</head>

<body>
    <h1>recomments book</h1>
    <?php
    $books = [
        [
            'name' => 'ss0',
            'auther' => 'qq0',
            'website' => 'https://examlpe.com0'
        ],
        [
            'name' => 'ss1',
            'auther' => 'qq1',
            'website' => 'https://examlpe.com1'
        ],
        [
            'name' => 'ss2',
            'auther' => 'qq2',
            'website' => 'https://examlpe.com2'
        ],
        [
            'name' => 'ss3',
            'auther' => 'qq0',
            'website' => 'https://examlpe.com3'
        ],
        [
            'name' => 'ss4',
            'auther' => 'qq4',
            'website' => 'https://examlpe.com4'
        ]
    ];
    function filterdbyauther($books, $auther)
    {
        $filterdbooks = [];
        foreach ($books as $book) {
            if ($book['auther'] == $auther) {
                array_push($filterdbooks, $book);
            }
        }
        return $filterdbooks;
    }
    ?>

    <ul>
        <?php foreach (filterdbyauther($books, 'qq0') as $book) : ?>
            <li>
                <p><?php echo 'name is : ' . $book['name'] . 'auther is : ' . $book['auther'] . 'website is : ' ?> <span>.<a href="<?php $book['website'] ?>"> website link</a></span></p>
            </li>
        <?php endforeach; ?>
    </ul>

    <br><br><br><br><br><br><br><br><br>
    <ul>
        <?php
        foreach ($books as $book) {
            if ($book['auther'] == 'qq0') {
                echo "<li> name is :{$book['name']}
             and Auther is :{$book['auther']}
              and that website addres is :<a href=<?php{$book['website']}?>{$book['website']}</a></li>";
            }
        }
        ?>
    </ul>



</body>

</html>