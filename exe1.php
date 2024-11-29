<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $score = 50;
        if($score>=90){
            echo "Grade A";
        }elseif($score >=80 && $score<=89){
            echo "Grade B";
        }elseif ($score>=70 && $score<79) {
            echo "Grade C";
        }else{
            echo "Grade F";
        }
    ?>
</body>
</html>