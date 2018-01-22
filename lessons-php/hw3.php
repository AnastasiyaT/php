<?php
/*Большинство задач на применение функций для работы со строками.
Задача 9** 
Написать функцию, которая выводит количество дней, оставшихся до нового года. 
Функция должна корректно работать при запуске в любом году. 

Задача 10** 
мы передаём число функции, которая в цикле for пытается поделить его на числа из диапазона 1..num и выводит
 результат
 Задача 1 
Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость» 
*/
function echo_func($text){
	echo "<p style='color:green'>$text</p>";
};
function echo_func2($text){
	echo "<p style='color:b00000'>$text</p>";
};
echo_func2("Задача 1.");

$hi = "Hello, ";
function hello(&$sayHello, $guest="Гость "){
	$sayHello .=$guest;
}
hello($hi);
echo_func("$hi");

hello($hi, "Вася");
echo_func("$hi");
// Задача 2 
// Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной. 
// Переставьте названия так, чтобы названия были упорядочены по алфавиту. 
echo_func2("Задача 2.");

$city = "Санкт-Петербург Лондон Плайя-Параисо Токио Лос-Анджелес Бахчисарай Якутск Нью-Йорк";
echo_func("Названия городов от пользователя:<br> $city");

$arr_city = explode(" ", $city);//разбивает строку и возвращает массив
var_dump($arr_city);

array_multisort($arr_city); 
// var_dump($arr_city);

foreach ($arr_city as $key => $town) {
	echo_func("$town<br>");
}

echo_func2("Задача 3.");
// Написать функцию - конвертер строки. 
// Возможности: 
// перевод всех символов в верхний регистр, 
// перевод всех символов в нижний регистр, 
// перевод всех символов в нижний регистр и первых символов слов в верхний регистр. 
// Это должна быть одна функция 
// $UP, $dwn, $upcase

$str2 = "Будьте реалистами, добивайтесь невозможного!";

function convert($str2, $conv){
	if($conv == 'UP'){
			$new_str .= mb_strtoupper($str2);//верхний регистр
			echo "$new_str <br>";
			
		} elseif($conv == 'dwn'){
			$new_str1 .= mb_strtolower($str2);//нижний регистр
			echo "$new_str1 <br>";
			
		} elseif($conv == 'upcase'){
			$new_str2 .= ucwords($str2);//перв символ верх регистр
			echo "$new_str2<br>";			
		}	
}
 convert($str2, 'UP');
 convert($str2, 'dwn');
 convert($str2, 'upcase');

// function convert2($arg2){
// 	$new_str .= mb_strtolower($arg2);//нижний регистр
// 	echo "$new_str<br>";	
// }
//  convert2($str2);

echo_func2(" Задача 4 ");
// Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
// Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены. strip_tags($str);

$strHtml = "<h1>Hello, world!</h1>";
echo strip_tags($strHtml);
echo_func(strip_tags($strHtml));

echo_func2("Задача 5.Создайте массив. Объедините все элементы массива в строку и выведите её на экран.");

$arr = [
	'key1' => 45,
	'key2' => 11,
	'key3' => "55"
];

$arr2 = array(
	'admin' => 'admin123',
	'user1' => 'user123',
	'user2' => 'user234',
);

echo implode($arr)."<br>";//объедение элементов массива в строку
echo implode($arr2);

echo_func2("Задача 6. В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'. <br>");
// Y m d // year mon mday
$date = '30-11-2017';
// $date_mas = getdate($date);
// echo $date_mas['year'].'.'.$date_mas['mon'].'.'.$date_mas['mday'];

$date_mas = explode("-", $date);//разбираем строку в массив
$date_mas = array_reverse($date_mas);//массив в обратном порядке
var_dump($date_mas);
$date = implode(".", $date_mas);//возврат массива в строку
var_dump($date);
echo "$date";
echo_func("$date");

echo_func2("Задача 7. Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши. ");
$php = "/php/";
$php_str = trim($php, "/../");
echo "$php_str";

$php_s = "/php/";
$php_s = str_replace(array('/', ''), '', $php_s);
echo_func("$php_s");

echo_func2("Задача 8. Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы
 в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если 
есть - ничего не делать. Задачу решите через rtrim ");

$s_str = 'просто строка.';

	function point($a){
		$d = rtrim($a, ".");
		var_dump($d.".");
	}

	point($s_str);




















?>