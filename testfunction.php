<?php
    // function testFunction(&$param1, $param2) { // &을 쓰면 밖에있는 것을 참조해서 만든다.
    //     $param1 += 20;
    //     $param2 += 10;
    //     return $param1 + $param2;
    // }

    // $a = 20;
    // $b = 30;

    // echo testFunction($a, $b) . "\n";
    // echo $a . "\n";
    // echo $b . "\n";

    // function addArray(Array &$arr) {
    //     $arr[] = "새로운 원소";
    // }

    // $arr = [1, 2, 3, 4];

    
    // addArray($arr);
    // var_dump($arr);

    function countDown(int $top) : int 
    {
        return $top * 3 / 2;
    }

    echo countDown(4) . "\n";
    echo countDown(7);