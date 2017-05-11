<!DOCTYPE html>
<html lang="en">
    <head>
	<title>{{ $title }}</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- CSS и JavaScript -->
	<style>
	    .panel-heading {
		width: 100%;
		text-align:justify;
	    }
	    #product:hover::after {
		content: attr(data-title); /* Выводим текст */
		position: absolute; /* Абсолютное позиционирование */
		left: 0; right: 0; bottom: 5px; /* Положение подсказки */
		z-index: 1; /* Отображаем подсказку поверх других элементов */
		background: rgba(0,42,167,0.6); /* Полупрозрачный цвет фона */
		color: #fff; /* Цвет текста */
		text-align: center; /* Выравнивание текста по центру */
		font-family: Arial, sans-serif; /* Гарнитура шрифта */
		font-size: 11px; /* Размер текста подсказки */
		padding: 5px 10px; /* Поля */
		border: 1px solid #333; /* Параметры рамки */
	    }	    
	</style>
    </head>

    <body>
	<div class="container">
	    <nav class="navbar navbar-default">
		<!-- Содержимое Navbar -->
	    </nav>
	</div>

	@yield('content')
    </body>
</html>
