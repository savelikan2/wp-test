<h1><?php echo get_admin_page_title() ?></h1>

<form action="options.php" method="post">
	<?php
	// Поля для безпеки для зареєстрованих налаштувань "premmerce"
	settings_fields('vendor');

	// Вивід секцій налаштувань та їх полів
	do_settings_sections('vendor-integration');

	// Кнопка збереження
	submit_button('Save Settings');
	?>
</form>