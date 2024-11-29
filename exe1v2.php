<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $score = 80;
    switch ($score) {
        case in_array($score, range(90, 100)):
            echo "Grade A";
            break;
        case in_array($score, range(80, 89)):
            echo "Grade B";
            break;
        case in_array($score, range(70, 79)):
            echo "Grade C";
            break;
        default:
            echo "Grade F";
    }
    ?>
</body>

</html>