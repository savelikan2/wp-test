<?php
use Vendor\Integration\IntegrationPlugin;
use Vendor\Integration\Admin\AdminOptions;
?>
<form method="post">
    <input type="hidden" value="1" name="submitted">
    <div class="wrap">
        <h1>Integration</h1>
        <table class="form-table">
            <tbody>
            <tr>
                <th>JQuery</th>
                <td>
                    <label>
                        <input type="checkbox"
                               name="<?php echo AdminOptions::OPTION ?>[jquery]" <?php echo checked(isset($options['jquery']), true) ?> >
						<?php _e('This feature fully integrate jquery into your site', IntegrationPlugin::DOMAIN) ?>
                    </label>
                </td>
            </tr>
            <tr>
                <th>Bootstrap</th>
                <td>
                    <label>
                        <input type="checkbox"
                               name="<?php echo AdminOptions::OPTION ?>[bootstrap]" <?php echo checked(isset($options['bootstrap']), true) ?> >
						<?php _e('This feature adds perfect style to your site', IntegrationPlugin::DOMAIN) ?>
                    </label>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
	<?php submit_button() ?>
</form>
