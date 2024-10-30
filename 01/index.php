<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 01</title>
</head>

<body>
    <?php
    $bookname = "clean code";
    $reade = false;
    if ($reade) {
        $message = 'you had read the book ' . $bookname;
    }
    else{
        $message = "you not yes read the book $bookname ";
    }
    ?>
    <h1>
        <?php echo $message ?>
    </h1>
</body>

</html>