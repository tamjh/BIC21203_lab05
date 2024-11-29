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
            foreach($students as $stu){
                echo "
                    <tr>
                        <td>". $stu['name'] ."</td>
                        <td>". $stu['program'] ."</td>
                        <td>". $stu['age'] ."</td>
                    </tr>
                ";
            }
        ?>
    </table>
</body>

</html>