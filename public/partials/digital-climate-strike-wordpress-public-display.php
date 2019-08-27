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
$iFrameHost = (string) $options['iframe_host'];
$disableGoogleAnalytics = (bool) $options['disable_google_analytics'];
$alwaysShowWidget = (bool) $options['always_show_widget'];
$forceFullPageWidget = (bool) $options['force_full_page_widget'];
$showCloseButtonOnFullPageWidget = (bool) $options['show_close_button_on_full_page_widget'];
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
         * Allow you to override the iFrame hostname. Defaults to https://assets.digitalclimatestrike.net
         */
        iframeHost: <?= json_encode($iFrameHost, JSON_UNESCAPED_SLASHES) ?>, // @type {string}

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

        /**
         * For the full page widget, shows a close button "x" and hides the message about the site being
         * available tomorrow. Defaults to false.
         */
        showCloseButtonOnFullPageWidget: <?= json_encode($showCloseButtonOnFullPageWidget) ?>, // @type {boolean}

        /**
         * The date when the sticky footer widget should start showing on your web site.
         * Note: the month is one integer less than the number of the month. E.g. 8 is September, not August.
         * Defaults to new Date() (Today).
         */
        footerDisplayStartDate: new Date(), //@ type {Date object}

        /**
         * The date when the full page widget should showing on your web site for 24 hours.
         * Note: the month is one integer less than the number of the month. E.g. 8 is September, not August.
         * Defaults to new Date(2019, 8, 20) (September 20th, 2019)
         */
        fullPageDisplayStartDate: new Date(2019, 8, 20), //@ type {Date object}
    }
</script>
<script src="https://assets.digitalclimatestrike.net/widget.js" async></script>
