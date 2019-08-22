<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/fightforthefuture
 * @since      1.0.0
 *
 * @package    Digital_Climate_Strike_Wordpress
 * @subpackage Digital_Climate_Strike_Wordpress/public/partials
 */

$options = get_option($this->plugin_name);
$cookieExpirationDays = (int) $options['cookie_expiration_days'];
$disableGoogleAnalytics = (bool) $options['disable_google_analytics'];
$alwaysShowWidget = (bool) $options['always_show_widget'];
$forceFullPageWidget = (bool) $options['force_full_page_widget'];

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->



<script>
    var DIGITAL_CLIMATE_STRIKE_OPTIONS = {
        /**
         * Specify view cookie expiration. After initial view, widget will not be
         * displayed to a user again until after this cookie expires. Defaults to
         * one day.
         */
        cookieExpirationDays: 1, // @type {number}

        /**
         * Prevents the widget iframe from loading Google Analytics. Defaults to
         * false. (Google Analytics will also be disabled if doNotTrack is set on
         * the user's browser.)
         */
        disableGoogleAnalytics: <?= json_encode($disableGoogleAnalytics) ?>, // @type {boolean}

        /**
         * Always show the widget. Useful for testing. Defaults to false.
         */
        alwaysShowWidget: <?= json_encode($alwaysShowWidget) ?>, // @type {boolean}

        /**
         * Automatically makes the widget full page. Defaults to false.
         */
        forceFullPageWidget: <?= json_encode($forceFullPageWidget) ?>, //@type {boolean}
    }
</script>
<script src="https://assets.digitalclimatestrike.net/widget.js" async></script>
