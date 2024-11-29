<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q1</title>
</head>

<body>
    <?php
    $name = "Tam Jin Horng";
    $matric = "AI220272";
    $course = "BIC21203";
    $yearOfStudy = 3;
    $address = "NO.34, jalan manis 15, Taman Manis, Parit Raja, Johor"
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <th>Matric Number</th>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <th>Year of study</th>
            <td><?php echo "Year $yearOfStudy"; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>

</html>