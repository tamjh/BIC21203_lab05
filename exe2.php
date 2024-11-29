<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $students = ["John" => 88, "David" => 78, "Alice" => 98];
    foreach ($students as $name => $grade) {
        echo "Student: $name, Grade: $grade <br>";
    }
    ?>
</body>

</html>