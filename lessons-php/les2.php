<?php
$begin = 9;
$end = 5;
$num = 0;

// if ($begin < $end) {
// 	if ($num < $end && $num > $begin) {
// 		echo "between begin && end";
// 	} else if($begin === $num) {// ifelse можно написать вместе
// 		echo "begin = num";
// 	} else {
// 		echo "not between begin && end";
// 	}
// } else {
// 	echo "begin > end";
// }

//альтернативный синтаксис
// if (условие):
// 	код;
// elseif (услоие):
// 	код;
// else:
// 	код;
// endif;

//тернарный оператор
//функция isset - проверяет на null есть или нет true либо false
// $some_var_res = (!isset(some_var))? "default" : $some_var;

//короткий сиснтаксис

// выражение1 ? : выражение2 есть в 5 и 7
// ТОЛЬКО 7 версия php оператор объединения c null ??
// для проерки на инициализированную переменную
// $some_var_res2v = $some_var2 ?? 'default';// ТОЛЬКО 7 версия

// оператор выбора switch
// switch ($a <=> $b) {
//  	case 0:
//  		echo "a = b";
//  		break;
//  	case 1:
//  		echo "a > b";
//  		break;
//  	case -1:
//  		echo "a < b";
//  		break; 	
//  	default:
//  		echo "default";
//  		break;
//  } 
//альтернативный синтаксис
 // switch (переменная или выражение):
 // 	case вариант1:
 // 		# code...
 // 		break;
 // 	case вариант2:
 // 	case вариант3:
 // 		# code...
 // 		break;
 // 	default:
 // 		# code...
 // 		break;
 // endswitch;


//цикл while
// от 1 до 4

$var = 0;
while ($var < 4) {
	$var++;
	echo "$var<br>";
}

//от 5 до 7
$var1 = 5;
do {
	echo "$var1<br>";
	$var1++;
} while ( $var1 <= 7);

//альтернативный синтаксис не работает!!!

// от 10 до -1

for ($i = 10; $i >= -1; $i--) {
	echo "i== $i<br>";
};
//альтернативный синтаксис
// for (начало; условие; шаг;):
// 	code;
// endfor;


// массивы

// с 4го php млжно создавать
$arr = [1, 4, 8];
var_dump($arr);
var_dump($arr[1]);
var_dump($arr[7]);
echo $arr;

$arr[3] = "elem";
var_dump($arr);

$arr['key'] = "elem2";
var_dump($arr);

$arr2 = [
	'key' => 45,
	5 => null,
	null => "value",
	false => "false",
	5 => "5",
];

var_dump($arr2);


$arr = [1, 4, 8];
$arr2 = [
	'key1' => "value",
	'key2' => "value"
];

var_dump($arr2);
// до php 7 работает с копией массива
foreach ($arr as $value) {

	echo "$value<br>";
}

var_dump($arr);

foreach ($arr2 as $value2) {

	echo "$value2<br>";
}

foreach ($arr2 as $key => $value2) {
	echo "$key<br>";
	echo "$value2<br>";
}
foreach ($arr as $key => $value2) {
	echo "$key => $value2<br>";
}

//php7

$days = [3, 8, 9, 6, 5];
foreach ($days as &$day ) {
	$day +=3;
}

unset($day);
var_dump($days);

//языковая конструкция list()
$coords = [
[1, 4],
[8, 9]
];

foreach ($coords as list($a, $b, $c)) {
	echo "a = $a, b = $b, c = $c <br>";
}
//BREAK

//Continue
is_string(var);
gettype();











?>