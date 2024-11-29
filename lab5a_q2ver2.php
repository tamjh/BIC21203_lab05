<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Rajuce',
            'program' => 'BIT',
            'age' => 22
        ]
    ];


    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        foreach ($students as $stu) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($stu['name']); ?></td>
                <td><?php echo htmlspecialchars($stu['program']); ?></td>
                <td><?php echo htmlspecialchars($stu['age']); ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>