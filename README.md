# Digital Climate Strike (wordpress plugin)

This September, millions of us will walk out of our workplaces and homes to join young climate strikers on the streets and demand an end to the age of fossil fuels.

This is the source code for the Digital Climate Strike's widget plugin for Wordpress. It will allow anyone with a website to join the digital climate strike in solidarity. [Click here to learn more.](https://globalclimatestrike.net)

This project was inspired by the [Fight for the Future Red Alert widget](https://github.com/fightforthefuture/redalert-widget).

## How to install the widget on your site

TBD

You can change the user experience and do some customization via the `settings` [described below](#customization-options).

If you have any problems or questions regarding the widget, please [submit an issue](https://github.com/global-climate-strikes/digital-climate-strike/issues).

## How it works & Demo

When you active the plugin on your site, it will show a footer banner ([demo](https://assets.digitalclimatestrike.net/demo.html)) informing visitors that your site is supporting the Global Climate Strike and directs them to also join the strike:

![A screenshot of the Digital Climate Strike footer widget](https://digital.globalclimatestrike.net/wp-content/uploads/sites/71/2019/08/DCS_Mockup_Banner2.png)

Then at midnight on September 20th for 24 hours, the banner will expand to be full screen ([demo](https://assets.digitalclimatestrike.net/demo.html?fullPage)), showing an unavoidable message that your site is joining the Global #ClimateStrike for the day, directing them to join the Global Climate Strike movement:

![A screenshot of the Digital Climate Strike full page widget](https://digital.globalclimatestrike.net/wp-content/uploads/sites/71/2019/08/DCS_Mockup_Full2.png) 

For those who cannot shut down their website for the day, a closable overlay option can also be configured ([demo](https://assets.digitalclimatestrike.net/demo.html?fullPage&showCloseButton)):

![A screenshot of the Digital Climate Strike full page widget with close button](https://digital.globalclimatestrike.net/wp-content/uploads/sites/71/2019/08/DCS_Mockup_Partial2.png)

The widget is designed to appear once per user, per device, per day, but can be configured to display at a different interval.

Please take a look at [**widget.js**](https://github.com/global-climate-strikes/digital-climate-strike/blob/master/static/widget.js) if you want to see exactly what you're embedding on your page.

The widget is compatible with Firefox, Chrome (desktop and mobile), Safari (desktop and mobile), Microsoft Edge, and Internet Explorer 11.

## Customization options (plugin settings)

If you modify the `settings` for the plugin, you can pass some properties in to customize the default behavior.
```
    /**
     * Specify view cookie expiration. After initial view, widget will not be
     * displayed to a user again until after this cookie expires. Defaults to 
     * one day.
     */
    cookieExpirationDays: 1
    
    /**
     * Set the language of the widget. We currently support:
     * 'en': English
     * 'de': German
     * 'es': Spanish
     * Defaults to null, which will obey the nagivator.language setting of the 
     * viewer's browser.
     */
     language: null
     
    /**
     * Allow you to override the iFrame hostname. Defaults to https://assets.digitalclimatestrike.net  
     */
    iframeHost: 'https://assets.digitalclimatestrike.net'

    /**
     * Prevents the widget iframe from loading Google Analytics. Defaults to
     * false. (Google Analytics will also be disabled if doNotTrack is set on
     * the user's browser.)
     */
    disableGoogleAnalytics: false

    /**
     * Always show the widget, even when someone has closed the widget and set the cookie on their device. 
     * Useful for testing. Defaults to false.
     */
    alwaysShowWidget: false

    /**
     * Automatically makes the widget full page. Defaults to false.
     */
    forceFullPageWidget: false
    
    /**
    * For the full page widget, shows a close button "x" and hides the message about the site being 
    * available tomorrow. Defaults to false.
    */
    showCloseButtonOnFullPageWidget: false
    
    /**
     * The date when the sticky footer widget should start showing on your web site.
     * Defaults to August 1st, 2019.
     */
    footerDisplayStartDate: mm/dd/yyyy
    
    /**
     * The date when the full page widget should showing on your web site for 24 hours. 
     * Defaults to September 20th, 2019
     */
    fullPageDisplayStartDate: mm/dd/yyyy
  
```


