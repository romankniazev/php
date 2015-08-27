<?php include_once __DIR__ . '/templates/header.php' ?>
<header>
	<div class="container clearfix">
		<!-- логотип -->
		<a href="index.html" class="logo">Yellow Duck</a>
		<!-- меню -->
		<?php include_once __DIR__ . '/templates/menu_top.php' ?>
	</div>
</header>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
		<?php include_once __DIR__ . '/templates/menu.php' ?>
		<div class="column column9">
			<div class="catalog">
				<!-- хлебные крошки -->
				<div class="breadcrumbs">
					<a href="index.html">Магазин</a>
					<p>Мини - утки</p>
				</div>
				<div class="row clearfix">
					<!-- элементы каталога -->
					<?php
						for ($i=0; $i < 18; $i++) { 
							include __DIR__ . '/templates/shop_element.php';
						}

					?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php include_once __DIR__ . '/templates/footer.php' ?>