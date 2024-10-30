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
            'website' => 'zz0'
        ],
        [
            'name' => 'ss1',
            'auther' => 'qq1',
            'website' => 'zz1'
        ],
        [
            'name' => 'ss2',
            'auther' => 'qq2',
            'website' => 'zz2'
        ],
        [
            'name' => 'ss3',
            'auther' => 'qq3',
            'website' => 'zz3'
        ]
    ];
    ?>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li> name is :{$book['name']} and Auther is :{$book['auther']} and that website addres is : {$book['website']}</li>";
        }
        ?>
    </ul>



</body>

</html>