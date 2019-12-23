<?php
    $num = $_GET['number'];

    
    if($num <=18) {
        echo "청소년";
    }else if($num < 30) {
        echo "청년";
    } else if($num < 40) {
        echo "아저씨";
    } else {
        echo "틀딱";
    }
    // echo "포르세스 페이지입니다. {$num}";


