<?php
// require_once("Human.php");
require_once("autoload.php");

$h1 = new Human();
$h1->setName("한재혁");
$h1->insertHobby("프로그래밍");;
$h1->insertHobby("게임");;
// new A();
$h2 = new Human("왕휘균", ["게임", "컴퓨터"]);

$h3 = clone $h2; //Swallow copy(통째로 바뀌는 방법), Deep copy(clone하는 방법)
$h3->setName("변경된 이름");
var_dump($h2);
var_dump($h3);
