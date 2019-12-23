<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>포문 연습</title>
</head>
<body>
    <?php
         $arr = ["최선한", "유준우", "한재혁", "왕휘균"];
         
    ?>
    <h1>기능반 명렬표</h1>
    <ul>
        <?php
            for($i = 0; $i < count($arr); $i++) {
                echo "<li>{$arr[$i]}</li>";
            }
        ?>
    </ul>
</body>
</html>