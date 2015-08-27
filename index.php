<?php

$file = __DIR__ . "/data/product.csv";

if (!file_exists($file)) {
	die("Где мой файл?");
}

if (($fp = fopen($file, 'r+')) === false){
	die("Ошибка открытия файла");
}

$product =[];

$i = 0;

while (($data = fgetcsv($fp, 1000, ';')) !== false) {
	if ($i > 0){
		$product[$data[0]] = $data;
	}
	$i++;
}

$page = $_GET['page'];

switch ($page) {
	case 'main':
		include 'main.php';
		break;

	case 'catalog':
		include 'catalog.php';
		break;

	case 'single-item':
		include 'single-item.php.php';
		break;

	default:
		include '404.php';
		break;
}

fclose ($file);