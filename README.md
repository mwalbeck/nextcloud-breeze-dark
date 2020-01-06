## PSA: This theme will transistion to an app, which means in the future you should get it from the nextcloud app store instead. NC17 will be the last release where I support the current theming method. master will be switched over to contain the app code when the theme for NC18 is released.

# Nextcloud Breeze Dark Theme
This is a Breeze Dark Theme for [Nextcloud](https://nextcloud.com) based on the Breeze Dark theme made by the KDE Project.

The icons are from the default Nextcloud theme and the individual apps, with the colors changed to better fit the theme.

![screenshot of theme](screenshot.png)

## Version number
The first number is the Nextcloud version. The second number is the Nextcloud major point release version. The third number is the theme version.

## Installation
This theme is now in the nextcloud app store under the name Breeze Dark, go check it out.

[https://apps.nextcloud.com/apps/breezedark](https://apps.nextcloud.com/apps/breezedark)

### Old and manual way

The master branch will always be the current stable release so you can clone that for easy installation and updates. Using git is currently the recommended way of installing the theme. You can also download it as a zip file either straight from the master branch, or on the release page.

Next, git clone or unzip it into your **nextcloud/themes** folder.

To enable the theme, add or change the theme option in your **config.php** to:

    'theme' => 'nextcloud-breeze-dark',

### Snaps
Custom themes in the snap isn't properly supported, but there is a workaround, which you can check out here: https://github.com/nextcloud/nextcloud-snap/issues/915#issuecomment-470789283

## Theming app
You can use the Nextcloud theming app to customize in your nextcloud instance like normal, though there are a few changes. If you have the theming app enabled you will most likely get a white Nextcloud icon instead of the themes default blue, this can be changes by disabling the theming app. The color attribute only changes the color of folders, and does not affect the header bar. Though depending on the color you choose (determined by the contrast with the selected color) you might get black icons in the header bar. This can be fixed by going to back to the default color or choosing a color that has a better contrast with white.

## Accessibility
This theme works with the Dyslexia font enabled.

## Contributions
The theme is written with [Sass](http://sass-lang.com/).

Please have a look at the CONTRIBUTING.md for details on how to contribute.

## Donations
If you like the theme and would like to donate you can use the following ways:

**PayPal:**  
https://www.paypal.me/magnuswalbeck

**Crypto:**  
BTC: 1Pp3UG9k6ZkwrVXrhr9kwwvjwDk5Vchu3f  
BCH: 1C7dQLqMU6Kucxx9GcFDMnTTTsBpeNT9vo  
LTC: LLii6QbQiHnkjq2TNcNYC3JafV4mWYXWnx

Thank you.