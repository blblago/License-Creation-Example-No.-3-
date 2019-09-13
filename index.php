<?php
/**
 * @package    License Creation Example No. 3 
 * @author     Original Author <blblago@ukr.net>
 * @version    alpha beta
 * @link       https://vd-studio.in.ua
 * @copyright  2017-2019 {vd-studio}
*/

	include("config.php");

	# Сообщения об ошибках
	$msg = '<div id="notice_error">Ошибка проверки лицензии.</div>';
	$msgTest = "Строк тестовой лицензии истек";

	# Пути к файлам лицензии
	$license_file = __DIR__ .'/'.implode('',array_map('chr',array(108,105,99,101,110,115,101,46,107,101,121)));
	$flTestPath = __DIR__ . '/' . str_replace('www.', '', $_SERVER[HTTP_HOST]) . '.key';

	# Проверка существования файлов лицензии
	if (!file_exists($license_file))
		if (!file_exists($flTestPath))
			die($msg);

	# Проверка временной лицензии
	if (file_exists($flTestPath)) {
		$time = file_get_contents($flTestPath);
		
		$time = explode('0xD', $time);
		$time = array_map('chr', $time);
		$time = array_reverse($time);
		
		for ($i = 0; $i < 10; $i++) {
			$a .= $time[$i];
		}

		$a = str_replace(array('q', 'w', 'e', 'r', 't', 'b', 'v', 's', 'd', '"'), array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0), $a);

		if ((int) $a > time()) {
			$test = TRUE;
		} else {
			die($msgTest);
		}
	}
	
	# В зависитмости от версии приложения получаем хеш домена
	if (IMAGECMS_NUMBER == '4.4 Premium') {
		$domain = sha1(str_replace('www.', '', $_SERVER['HTTP_HOST']));
	} elseif (IMAGECMS_NUMBER == '4.4 Professional') {
		$domain = md5(str_replace('www.', '', $_SERVER['HTTP_HOST']));
	} else {
		// die($msg);
	}

	# Проверка постоянно лицензии
	if (!$test) {

		$chars = array();

		for ($i = 0; $i < strlen($domain); $i++)
			array_push($chars, $domain{$i});

		$chars = array_map('ord', $chars);
		$chars = array_map('base64_encode', $chars);
		$chars = array_reverse($chars);
		$license_code = implode('0xD', $chars);

		$key = trim(file_get_contents($license_file));

		if ($license_code != $key)
			die($msg);
	}
	
	echo "Добро пожаловать на сайт";
?>