<?php

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