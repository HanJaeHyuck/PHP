<?php
    $name = "한재혁";

    $str = "안녕하세요 제이름은 $name 입니다. <br>";

    
    echo mb_strlen($str) . " : "  . $str; //문자열 길이 str mb를 붙혀주면 한글의 길이를 1바이트로 생각한다.
    echo '안녕하세요 제이름은 $name 입니다. <br>';
