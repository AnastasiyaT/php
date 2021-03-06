<?php
// Задание к субботе (13.01.18): 
// 1. Функции для работы с массивами 
// 1) array_combine, array_unique 
// 2) array_count_values, count 
// 3) array_diff_key, in_array 
// 4) array_intersect_key, range 
// 5) array_key_exists, compact 
// 6) array_intersect, array_merge 
// 7) array_multisort 
// 8) array_pop, array_push 
// 9) array_rand, shuffle 
// 10) array_replace, array_chunk 
// 11) array_reverse, array_search 
// 12) array_shift, array_unshift 
// 13) array_slice, array_splice 

function echo_func($text){
	echo "<p style='color:blue'>$text</p>";
}
echo_func("Задача 1.");
echo_func("array_key_exists — проверяет, присутствует ли в массиве указанный ключ");
//array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс (ищет ключ только на 1м уровне массива).

$search_array = array('first' => 1, 'second' => 4);//cоздаём массив
if (array_key_exists('first', $search_array)) {//проверяем функцией array_key_exists наличие ключа first в массиве
    echo "Массив содержит элемент 'first'.";
}

echo_func("compact — cоздает массив, содержащий названия переменных и их значения ");
/*compact — Создает массив, содержащий названия переменных и их значения.
Для каждого из переданного параметров, функция compact() ищет переменную с указанным именем в текущей таблице символов и добавляет их в выводимый массив так, что имя переменной становится ключом, а содержимое переменной становится значением этого ключа(обратна функции extract()).
Неустановленные строки будут пропущены.*/
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);//создание массива 
//параметры становятся ключами, а их содержимое значением ключа
//неустановленные строки будут пропущены
var_dump($result);
print_r($result);

echo_func("Задача 2.");
// 2. Дан массив [3, 1, 6, 0, 4, 5]. 
// С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
// Результат вывести на экран; 
$arr = [3, 1, 6, 0, 4, 5];

foreach ($arr as $value) {
	$value**=2 ;	
	echo "$value<br>";
	$res+= $value;		
}
echo_func("Сумма квадратов = $res");

echo_func("Задача 3.");
// 3. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл); 

// for ($i = 1; $i<=10; $i++) {
// $res =$i*$i;
// echo "$i умножить на $i = $res<br>";
// }

	for ($i = 1; $i <= 10; $i++){
		echo "Умножение на $i <br>";
		for ($j = 1; $j <= 10; $j++){
			$result = $i * $j;
			echo "$i x $j = $result <br>"; 			
		}	
	}

	echo_func("Задача 4.");
// 4. Нарисуйте треугольник из символов *. Высота треугольника равна 15. 

	for ($i = 1; $i <= 15; $i++) {
    		for($j = 1; $j <= $i; $j++) {
        		echo "*";
    			}
    		echo "<br>";
			}
// 5. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, <br> 
// а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски 
	echo_func("Задача 5.");

$days = [
    'Monday' => 'Понедельник',
    'Tuesday' => 'Вторник',
    'Wednesday' => 'Среда',
    'Thursday' => 'Четверг',
    'Friday' => 'Пятница',
    'Saturday' => 'Суббота',
    'Sanday' => 'Воскресенье'
];

foreach($days as $key => $day){
	if($key === date(l)){
		echo_func ("<b> $day</b><br>");
	} else {
		echo_func ("$day <br>");
	} 
}

echo_func("Задача 6.");
// 6. Вывести все числа, от 0 до 30 (включительно) , у которых есть хотя бы одна цифра 3 и которые не делятся на 5. Посмотрите функцию strpos! 

$i = 0;
do { 
    $i++;	
	if (strpos($i, '3') !== false && ($i%5 !== 0)) {
		     echo "$i<br>";		        
	} 
} while($i <= 29);

echo_func("Задача 7.");

// 7**. Отсортировать массив по 'price' 
$arr = [ 
	'1'=> [ 
		'price' => 10, 
		'count' => 2 
		], 

	'2'=> [ 
		'price' => 5, 
		'count' => 5 
		], 

	'3'=> [ 
		'price' => 8, 
		'count' => 5 
		], 

	'4'=> [ 
		'price' => 12, 
		'count' => 4 
		], 

	'5'=> [ 
		'price' => 8, 
		'count' => 4 
		], 
];

foreach ($arr as $key => $value) {
	$new_arr[$key] = $value['price'];
}

array_multisort($new_arr, $arr);
var_dump($new_arr);
var_dump($arr);


?>


