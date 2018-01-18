<?php
echo "Взаимодействие с пользователем"; 

$link = 'html://'. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
var_dump($link);

$link = 'https://github.com/web-development-courses/php';

$parse_url =  parse_url($link);
var_dump($parse_url);

/*Требоания к url */

// 1._urlencode($url_str);
// 2._rawurlencode($url_str);


// 1._urldecode($url_str);
// 2._rawurldecode($url_str);

$str = 'https://www.google.ru/search?q=ghjjjj&oq=ghjjjj&aqs=chrome..69i57j0l5.1468j0j8&sourceid=chrome&ie=UTF-8';

$decode_url = urldecode($str);
var_dump($decode_url);

// формирование строки запроса
// http_build_query(массив с параметрами);
// параметры то что идёт после вопросительного знака
// ?param1=value1&param2=value2

$params = [
	'id' => 1,
	'login' => 'qwe'
];

$url = 'https://oauth.vk.com/autorize?'.//куда отправлять
http_build_query($params);// что отправлять

var_dump($url);

// var_dump($_GET['id']); НЕЛЬЗЯ . не безопасно

$get = $_GET;

var_dump($get);

// $params[]=1&params[]=2&params[]=3

var_dump($_POST);

$user = [
	[
		'login' => 'qwe',
		'pwd' => '41242'

	],
	[
		'login' => 'asd',
		'pwd' => '5645'
	]

];

// function check_users($users){
// 	$post = $_POST;
// 	foreach ($users as $user) {
// 			if ($post['login'] == $user['login']) {
// 				if ($post['pwd'] == $user['pwd']){
// 					echo "Вы вошли как". $post['login'];
// 					return true;
// 				}				
// 			}		
// 		}

// 	echo "Вы не ошли 2";
// 	return false;
// }


// if (isset($_POST['login'])) {
// 	check_users($user);
// }

// checkUsers($user);

// if($_POST['login']) == 'qwe' {
// 	echo "Вы вошли как qwe";
// } else {
// 	echo "Вы не вошли";
// }

//как проверять пустые строки -вначале HTML js потом сервер
//защита от прямых атак
//trim($str);  удаляет пробелы и др символы
//isset
//переопределение данных из суперглобальных массивов
//очистка

// Защита от xss атак
// strip_tags($str);// удаляет html теги
// htmlspecialchars($str);
// htmlentities($str);

// //Защита от SQL иньекций

// addcslashes($str);//экранирует сиволы
// stripcslashes($str);
// mysql_real_escape_string($str);//посмотреть


//фильтрация данных!!!ОСОБЕННО почитать
// filter_var(variable)
// filter_var_array(data)
// 




var_dump(trim($_POST['login']));


?>

<a href="les1.php?id=4&login=Пупкин">index<a>

<form method="post" action="les4.php">
	<label for="login">Введите логин</label>
	<input id="login" type="text" name="login">

	<label for="pwd">Введите пароль</label>
	<input id="pwd" type="password" name="pwd">

	<button type="submit">Войти</button>
	

</form>