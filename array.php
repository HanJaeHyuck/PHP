<?php
function dump($value) {
	echo "<div class='dump' style='display:inline-block;width:50%;'>";
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
	echo "</div>";
}
echo "<div stlye='width:400px;'";
//array_chunk
	// $numArr = [1, 2, 3, 4, 5, 6, 7];
	// $reslut = array_chunk($numArr, 6); //몇개로 짜를지 기준이 됨 ex) 6 이면 처음부터 6개씩 자르기 시작한다.
	// dump($reslut);

	// $reslut =array_chunk($numArr, 3, false); // false를 입력하면 다음 배열 안에 있는 배열에서 안으로 들어갈때 배열의 번호가 초기화 된다.
	// dump($reslut);
	


//array_diff : 배열 순서 상관없이 같은 숫자 있으면 true 비교하는 1번째 배열을 기준으로 2번째 베열에 없는 숫자의 index번호를 출력한다.
//array_diff_assoc : 배열의 순서까지 비교한다.
	$arr1 = [1, 2, 3, 4, 5, 6]; 
	$arr2 = [7, 1, 3, 4, 5, 9];
	$reslut = array_diff_assoc($arr1, $arr2);
	dump($reslut);



echo "</div>";