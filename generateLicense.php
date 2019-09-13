<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Генератор ключей H-SCRIPT</title>
<meta name="description" content="" />

<link media="screen" href="/assets/css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<h1>Генератор ключей</h1>
		<h2 class="text-center">Сгенерировать ключ для  сайта</h2>

		<div class="perspective">
			<div id='content'><div class="alert alert-success" role="alert">
<h2>Инструкция</h2>
1. Выберите тип лицензии<br>
2. В зависимости от первого пункта :<br>
* Введите в поле имя домена: (например: domen.com)<br>
* или<br>
* Введите в поле конечная дата лицензии: (например: 12.05.1990)<br>
3. Нажмите кнопку "Генерировать"<br>
5. Вставьте в созданный license.key файл сгенерированный код и сохраните его<br>
6. Активация завершена
</div>

<div class="alert alert-info" role="alert">
<h2>Ссылки на продукт</h2>
<a href="" target="_blank">Ссылка на скрипт</a><br>
<a href="" target="_blank">Ссылка на скрипт</a><br>
</div>

<label for="type-license">Выберите тип</label>
<div class="form-group">
	<select id="type-license" class="form-control" onchange="selTypeLicense()">
		<option value=''>Выберите тип лицензии</option>
		<option value="trial" class="f_input">Временная</option>
		<option value="permanent" class="f_input">Постоянная</option>
	</select>
</div>

  <div class="form-group"  id="input-license-date" style='display:none;'>
        <label for="exampleInputPassword1">Введите дату окончания лицензии</label>
        <input type="number" id="license-date" name="license-date" value="" class="form-control" placeholder="Введите дату окончания лицензии, например: 12.06.2018">
  </div>
  
<div id="version" style='display:none;'>  
<label for="type-license">Выберите версию</label>
<div class="form-group">
	<select id="type-license" class="form-control" onchange="selTypeLicense()">
		<option value=''>Выберите версию приложения</option>
		<option value="premium_4_4" class="f_input">4.4 Premium</option>
		<option value="professional_4_4" class="f_input">4.4 Professional</option>
	</select>
</div>
</div>

  <div class="form-group" id="input-license-domen" style='display:none;'>
        <label for="exampleInputPassword1">Введите домен</label>
        <input type="text" id="license-domen" name="license-domen" value="" class="form-control" placeholder="Введите домен вашего сайта, например: doment.com">
  </div>

<input onclick="keygen(); return false;" value="Генерировать" class="button15" type="button">

<br><br>

  <span id="box-key"></span>

</div>

		</div>
	</div>

</body>

<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/keygen.js"></script>

</html>