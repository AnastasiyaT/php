<?php 
// однострочный комментарий
/* Многострочный 
*/
# ещё способ в стиле Unix
// вывод на экран
//echo "Hello"; вывод инфо на экран

var_dump("Hello");// Отладка

$variableName;
/*Требования к именам переменных
первый симол:буква или знак подчёркивания
далее комбинация из букв, цифры и знаки __
чувствителен к регистру. приянто маленькими буквами
*/

$hello = "Hello";//создание переменной присваивание значения
echo $hello;

$hello = 90;//Переопределение переменной
echo $hello;

// var_dump($GLOBALS);

//$_SERVER
//$_REQUEST

//КОНСТАНТЫ. принято писать заглаными буквами
// доступны из лбобой области видимости
// определение (имя и значение)
define("name", "value");

// 2-ой способ
// до 7го только 2м cgjcj,jv

const CONST_2_NAME = "value 2";
//вывод на экран
var_dump(CONST_2_NAME);
var_dump(constant("CONST_2_NAME"));

get_defined_constants();//можно увидеть все константы

//var_dump(get_defined_constants());

// типы данных
// 1. простые (скалярные) типы данных
	// 1)boolean - логический
	// 2) integer целое число
	// 3)  float  - число с плав точкой
	// 4) string строка
// 2. смешанные
	//1) array - массив (нумерованный и ассоциативный)
	//2) object - объект (на осноании зарание описанного класа через new
	//3) callable
	//4) iterable
// 3. специальные
 	//1) NULL
 	//2) resourse
//$ псевдопеременная

//boolean (bool)
$boo = true; // false

//integer (int) десятиричн шестнадцатиречные...
// 32бит -  
$num = 56;
//PHP_MAX_SIZE можно установить в настройках
//PHP_MIN_SIZE начиная с php 7.0.0

//  для округления функция 
//round();

//float (double)

$float_num = 1.456;

// gmp-функция - для ысокой точновсти операций с float

//NAN is_nan(); проверка на число
//string
$num = 90;
$str = "Hello, $num uiuiui";
$STR = 'Hello $num';

var_dump(str);
var_dump(STR);


// массивы 
$arr = array(1, 7, 8); //нумероанный

$arr2 = array(
	'key' => 'value',
	'key2' => 'value'
);

var_dump($arr);
var_dump($arr2);


//объекты ТОЛЬКО НА ОСНОВЕ КЛАССОВ описанных ранее с помощю new

//$obj = new StrClass();
//var_dump($obj);

/* null
1. если переменной не присвоено значение
2. переменной явно присвоили null
3. уничтожили функцией unset(имя переменной)

is_null();
is_bool();
is_int();
is_float();
is_string();
is_array();
is_object();
is_resourse();

приведение переменной к опр типу
(string),
(int) | (integer), 
(bool) | (boolean)
(array)
(object)
(float) | (double) | (real) числа с плаваящей точкой
*/

$num_var = 12;
$str_var = (string) $num_var;
var_dump($str_var);

$b = 0 ;
var_dump((boolean)$b);

// ОПЕРАТОРЫ

/*
присваивания
= += -= *= / 
арифметическиее операторы + - * %  / **
инкремент и декремент ++ --
конкатенация точкой .
операторый сравнения == === != !== > < <= => 
в 7.0.0  spaceship  <=> определяет какая переменная больше (вернёт 0 1 -1) 

*/

var_dump(4 <=> 4);

/* Логический оператор  && - и 
|| - или 
! - НЕ
 and or - приоритеты операторы*/











?>