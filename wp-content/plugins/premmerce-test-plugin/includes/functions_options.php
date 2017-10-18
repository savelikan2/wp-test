<?php




//--показати сторінку налаштування OPTIONS
function premmerce_options_page_html()
{
    // Перевірка прав доступу
    if (!current_user_can('manage_options')) {
        return;
    }


    if(isset($_POST) and isset($_POST['submit'])) {
        if (get_option('premmerce_options') !== false) {
            update_option('premmerce_options', $_POST['premmerce_options']);
        } else {
            add_option('premmerce_options', $_POST['premmerce_options'], null, 'no');
        }
    }

    $options = get_option('premmerce_options');
    ?>
    <div class="wrap">
        <h2>Налаштування OPTIONS</h2>
        <form method="post" action="">
            <h3>Секція</h3>
            <p>Контент секції</p>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="text">Текст</label></th>
                    <td><input type="text" id="text" name="premmerce_options[premmerce_field_input]" value="<?php echo $options['premmerce_field_input']; ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="checkbox">Чекбокс</label></th>
                    <td><input type="checkbox" id="checkbox" name="premmerce_options[premmerce_field_checkbox]" value="1" <?php checked($options['premmerce_field_checkbox']); ?> /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="checkbox">Селект</label></th>
                    <td>
                        <select name="premmerce_options[premmerce_field_select]">
                            <option value="1" <?php selected($options['premmerce_field_select'], 1 ); ?>>Варіант 1</option>
                            <option value="2" <?php selected($options['premmerce_field_select'], 2 ); ?>>Варіант 2</option>
                            <option value="3" <?php selected($options['premmerce_field_select'], 3 ); ?>>Варіант 3</option>
                        </select>
                    </td>
                </tr>
            </table>
            <?php submit_button('Зберегти налаштування' ); ?>
        </form>
    </div>
    <?php

}