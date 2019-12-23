<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
    // echo는 php에서 출력문 이다.
    //$ 변수는 변수 선언
    $a = 10;
    echo "<h1>안녕하세요</h1>";
    define("GONDR", "http://www.gmsgondr.net");

    function testFnction() {
        $b = 30;
        // echo __LINE__; __DIR__현재 파일 폴더 반환 ___CLASS__ 현재 클래스 반환

        // unset($b) //세팅되어있는 함수 지우기
        // $a가 세팅 되어있는지 확인하는함수가 isset
        if(isset($a)) {
            
            echo $a + $b;
        } else {
            echo 10  + $b;
        }
        echo GONDR;
    }

    echo __LINE__;
    testFnction();
    
?>
<!-- <?= "이것은 한줄 출력용 입니다." ?> -->
</body>
</html>