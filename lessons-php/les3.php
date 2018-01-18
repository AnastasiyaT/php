<?php
// функции
// объявление функции

// function func_name($arg1, &$arg2, $arg3='default value', ...args) {
// 	тело функии;
// 	return;
// }
//  func_name(значения аргументов); //ввызов функции

function echo_func($text) {
	echo "<p style='color:red'>$text</p>";
}

echo_func("Аргументы");

// Передача аргументов:
// 1) по значению
// 2) по ссылке &$arg2
// 3) значение аргумента по умолчанию..м б скалярные  массив null
// 4) переменное количество аргументов ...$args

$str = "I am lerning";
function concat_func($main_str, $ading_str){
	$main_str .=$adding_str;
}

concat_func($str, "PHP");
echo $str;


//Переменное количесто переменных $numbs

function get_sum(...$numbs){
	$res = 0;
	foreach ($numbs as $val){
		$res += $val;
	}
	return $res;
}
$summ = get_sum(2, 8, 6, 6);
echo_func($summ);


// function summ2 ($a, $b){
// 	echo $a + $b;
// }

// $arr = [2, 8];
// summ(...$arr);


// тип передааемых аргументов

// function tst(boolean $arr){
// 	echo $arr;
// 	// if ($boo){
// 	// 	echo "True";
// 	// } else {
// 	// 	echo "False";
// 	// }
// }

// tst("ooj");

function show_return($arg){
	$arg += 89;
	// return $arg;//выход из ункции/ $arg один аргумент или массив(если неск арг)
	// код после Return не работает

	// return [6, 7, 8];

	return[
		"login" => $login,
		"email" => $email
	];
}

$show_return_res = show_return(8);
var_dump($show_return_res);

// статическая переменная
//существует только  в локальной области видимости
//не теряет значение, когда выполнение программы...
// объявить стат переменную
function counter(){
	static $count = 0;
	$count++;
	return $count;
}

var_dump(counter());
var_dump(counter());
var_dump(counter());
var_dump(counter());


//анонимные функции
$some_var = function($some_args){
	echo some_args;
};

$some_var("Hello");
//доступ к аргументам функии
//func_get_arg()
//func_get_args()
//func_num_args()


function show_args_info($args){
	var_dump("func_num_args". func_num_args());
	var_dump("func_get_arg". func_get_arg(0));
	var_dump(func_get_args());
	// for ($i = 0; $i < func_num_args(); $i++){
	// 	echo "arg($i)".func_get_arg($i).<br>;
	// }

	foreach ($func_get_args() as $val) {
		var_dump($val);
	}
}

show_args_info(45, 89, null);





?>