<?php include_once __DIR__ . '/templates/header.php' ?>
<body>
<header>
	<div class="container clearfix">
		<!-- логотип -->
		<a href="#" class="logo">Yellow Duck</a>
		<!-- меню -->
		<?php include_once __DIR__ . '/templates/menu_top.php' ?>
	</div>
</header>
<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">
			<!-- боковое меню -->
			<!-- Подгружаем меню из menu.php -->
			<?php include_once __DIR__ . '/templates/menu.php' ?>
			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">
					<!-- элементы каталога -->
					<?php for ($i=0; $i < 6; $i++): ?> <!-- Начало цикла -->
					<?php include __DIR__ . '/templates/shop_element.php' ?>
					<?php endfor; ?> <!-- конец массива -->
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once __DIR__ . '/templates/footer.php' ?>