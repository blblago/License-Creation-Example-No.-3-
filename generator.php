<?php

header('Content-Type: text/html; charset=utf-8');

if ($_REQUEST['type'] == "trial") {
	
	/* Generate trial license */
$time = $_REQUEST['date'];
$time = str_split($time);
$time = str_replace(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0), array('q', 'w', 'e', 'r', 't', 'b', 'v', 's', 'd', '"'), $time);
$time = array_reverse($time);
$time = array_map('ord', $time);
$time = implode('0xD', $time);
	
	$html = ' <div class="alert alert-info">Сгенерирован временный ключ <br>';
	$html .= '<div style="padding:10px; background:#fff; color:#000; word-wrap: break-word;">' . $time . '</div><br>';
	$html .= 'Создайте файл с названием вашего домена<strong><font color="green"> domenname.key </font></strong> и вставьте в него сгенерированный ключ.';
	$html .= '</div>';
	
	echo $html;
	
} elseif ($_REQUEST['type'] == "permanent") {
	
	/* Generate permanent license */
	$step = $_REQUEST['host'];
	$step = md5($step);
	$step = str_split($step);
	$step = array_map('ord', $step);
	$step = array_map('base64_encode', $step);
	$step = array_reverse($step);
	$step =  implode ('0xD', $step);	
	
	$html = ' <div class="alert alert-info">Сгенерирован ключ для сайта';
	$html .= '<strong><font color="green"> "' . $_REQUEST['host'] . '" </font></strong>';
	$html .= 'под управлением {name CMS}<br><br>';
	$html .= '<div style="padding:10px; background:#fff; color:#000; word-wrap: break-word;">' . $step . '</div><br>';
	$html .= 'Создайте файл <strong><font color="green">license.key</font></strong> и вставьте в него сгенерированный ключ.';
	$html .= '</div>';
	
	echo $html;

} else {
	echo '<div class="quote"> Выберите тип лицензии</center></div>';
}