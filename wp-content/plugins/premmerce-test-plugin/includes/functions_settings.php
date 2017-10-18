<?php


function premmerce_settings_page_html() {

    // Перевірка прав доступу
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error(
            'premmerce_messages',
            'premmerce_message',
            'Налаштування збережені',
            'updated' );
    }

    // Показати повідомлення error/update
    settings_errors( 'premmerce_messages' );

    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // Поля для безпеки для зареєстрованих налаштувань "premmerce"
            settings_fields( 'premmerce' );

            // Вивід секцій налаштувань та їх полів
            do_settings_sections( 'premmerce' );

            // Кнопка збереження
            submit_button( 'Зберегти налаштування' );
            ?>
        </form>
    </div>
    <?php
}










function premmerce_settings_init() {
    // Зареєструвати налаштування "premmerce" page
    register_setting( 'premmerce', 'premmerce_options' );

    // Зареєструвати секцію на сторінці "premmerce"
    add_settings_section(
        'premmerce_section',
        'Секція',
        'premmerce_section_callback',
        'premmerce'
    );

    // Зареєструвати поле в секції "premmerce_section"
    add_settings_field(
        'premmerce_field_input',
        'Текст',
        'premmerce_input_callback',
        'premmerce',
        'premmerce_section',
        [
            'label_for' => 'premmerce_field_input',
        ]
    );

    // Зареєструвати поле в секції "premmerce_section"
    add_settings_field(
        'premmerce_field_checkbox',
        'Чекбокс',
        'premmerce_checkbox_callback',
        'premmerce',
        'premmerce_section',
        [
            'label_for' => 'premmerce_field_checkbox',
        ]
    );

    // Зареєструвати поле в секції "premmerce_section"
    add_settings_field(
        'premmerce_field_select',
        'Селект',
        'premmerce_select_callback',
        'premmerce',
        'premmerce_section',
        [
            'label_for' => 'premmerce_field_select',
        ]
    );
}

function premmerce_section_callback() {
    echo "<p>Контент секції</p>";
}

function premmerce_input_callback( $args ) {

    $option = get_option( 'premmerce_options' )
    ?>
    <input type="text" name="premmerce_options[<?= esc_attr( $args['label_for'] ); ?>]"
           value="<?= $option[ $args['label_for'] ] ?>">
    <?php
}


function premmerce_checkbox_callback( $args ) {
    $option = get_option( 'premmerce_options' )
    ?>
    <input type="checkbox" name="premmerce_options[<?= esc_attr( $args['label_for'] ); ?>]"
           value="1" <?php checked( $option[ $args['label_for'] ] ); ?> >
    <?php
}


function premmerce_select_callback( $args ) {
    $option = get_option( 'premmerce_options' )
    ?>
    <select name="premmerce_options[<?= esc_attr( $args['label_for'] ); ?>]">
        <option value="1" <?php selected( $option[ $args['label_for'] ], 1 ); ?>>Варіант 1</option>
        <option value="2" <?php selected( $option[ $args['label_for'] ], 2 ); ?>>Варіант 2</option>
        <option value="3" <?php selected( $option[ $args['label_for'] ], 3 ); ?>>Варіант 3</option>
    </select>
    <?php
}

/**
 * Реєстрація premmerce_settings_init по хуку admin_init
 */
add_action( 'admin_init', 'premmerce_settings_init' );