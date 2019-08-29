
<?php
if ( ! defined( 'WPINC' ) ) die;
?>

<div class="wrap">
    <h2>Digital Climate Strike <?php _e('Options', $this->plugin_name); ?></h2>

    <form method="post" name="digital_climate_strike_options" action="options.php">
        <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        $force_full_page_widget = ( isset( $options['force_full_page_widget'] ) && ! empty( $options['force_full_page_widget'] ) ) ? 1 : 0;
        $always_show_widget = ( isset( $options['always_show_widget'] ) && ! empty( $options['always_show_widget'] ) ) ? 1 : 0;
        $iframe_host = ( isset( $options['iframe_host'] ) && ! empty( $options['iframe_host'] ) ) ? esc_attr($options['iframe_host']) : 'https://assets.digitalclimatestrike.net';
        $cookie_expiration_days = ( isset( $options['cookie_expiration_days'] ) && ! empty( $options['cookie_expiration_days'] ) ) ? esc_attr($options['cookie_expiration_days']) : 1;
        $disable_google_analytics = ( isset( $options['disable_google_analytics'] ) && ! empty( $options['disable_google_analytics'] ) ) ? 1 : 0;
        $show_close_button_on_full_page_widget = ( isset( $options['show_close_button_on_full_page_widget'] ) && ! empty( $options['show_close_button_on_full_page_widget'] ) ) ? 1 : 0;

        $footer_display_start_date = $this -> fieldIsSet($options, 'footer_display_start_date') ? esc_attr($options['footer_display_start_date']) : date("Y/m/d");
        $full_page_display_start_date = $this -> fieldIsSet($options, 'full_page_display_start_date') ? esc_attr($options['full_page_display_start_date']) : date("Y/m/d");

        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
        ?>
        <fieldset>
            <span><?php _e( 'Cookie Expiration Days:', $this->plugin_name ); ?></span>
            <input type="number"
                   class="cookie_expiration_days"
                   id="<?php echo $this->plugin_name; ?>-cookie_expiration_days"
                   name="<?php echo $this->plugin_name; ?>[cookie_expiration_days]"
                   value="<?= !empty( $cookie_expiration_days ) ? $cookie_expiration_days : 1; ?>"/>
        </fieldset>
        <fieldset>
            <span><?php _e( 'iFrame Host:', $this->plugin_name ); ?></span>
            <input type="url"
                   class="cookie_expiration_days"
                   id="<?php echo $this->plugin_name; ?>-iframe_host"
                   name="<?php echo $this->plugin_name; ?>[iframe_host]"
                   value="<?= !empty( $iframe_host ) ? $iframe_host : 'https://assets.digitalclimatestrike.net'; ?>"/>
        </fieldset>
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-disable_google_analytics">
                <span><?php esc_attr_e('Disable Google Analytics:', $this->plugin_name); ?></span>
                <input type="checkbox"
                       id="<?php echo $this->plugin_name; ?>-disable_google_analytics"
                       name="<?php echo $this->plugin_name; ?>[disable_google_analytics]"
                       value="1"
                    <?php checked( $disable_google_analytics, 1 ); ?>
                />
            </label>
        </fieldset>
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-always_show_widget">
                <span><?php esc_attr_e('Always Show Widget:', $this->plugin_name); ?></span>
                <input type="checkbox"
                       id="<?php echo $this->plugin_name; ?>-always_show_widget"
                       name="<?php echo $this->plugin_name; ?>[always_show_widget]"
                       value="1"
                    <?php checked( $always_show_widget, 1 ); ?>
                />
            </label>
        </fieldset>
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-force_full_page_widget">
                <span><?php esc_attr_e('Force Full Page Widget:', $this->plugin_name); ?></span>
                <input type="checkbox"
                       id="<?php echo $this->plugin_name; ?>-force_full_page_widget"
                       name="<?php echo $this->plugin_name; ?>[force_full_page_widget]"
                       value="1"
                    <?php checked( $force_full_page_widget, 1 ); ?>
                />
            </label>
        </fieldset>
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-show_close_button_on_full_page_widget">
                <span><?php esc_attr_e('Show close button on Full Page Widget:', $this->plugin_name); ?></span>
                <input type="checkbox"
                       id="<?php echo $this->plugin_name; ?>-show_close_button_on_full_page_widget"
                       name="<?php echo $this->plugin_name; ?>[show_close_button_on_full_page_widget]"
                       value="1"
                    <?php checked( $show_close_button_on_full_page_widget, 1 ); ?>
                />
            </label>
        </fieldset>
        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-footer_display_start_date">
                <span><?php esc_attr_e('Footer display start date:', $this->plugin_name); ?></span>
                <input type="date"
                       id="<?php echo $this->plugin_name; ?>-footer_display_start_date"
                       name="<?php echo $this->plugin_name; ?>[footer_display_start_date]"
                       value="<?= !empty( $footer_display_start_date ) ? $footer_display_start_date : ""; ?>"
                />
            </label>
        </fieldset>

        <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-full_page_display_start_date">
                <span><?php esc_attr_e('Full page display start date:', $this->plugin_name); ?></span>
                <input type="date"
                       id="<?php echo $this->plugin_name; ?>-full_page_display_start_date"
                       name="<?php echo $this->plugin_name; ?>[full_page_display_start_date]"
                       value="<?= !empty( $full_page_display_start_date ) ? $full_page_display_start_date : ""; ?>"
                />
            </label>
        </fieldset>

        <?php submit_button( __( 'Save all changes', $this->plugin_name ), 'primary','submit', TRUE ); ?>
    </form>
</div>