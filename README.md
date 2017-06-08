# Nextcloud Breeze Dark Theme
This is a Breeze Dark Theme for [Nextcloud](https://nextcloud.com) based on the Breeze Dark theme made by the KDE Project.

The icons are from the default Nextcloud theme and the individual apps, with the colors changed to better fit the theme.

Current stable release: 12.0.1

![screenshot of theme](screenshot.png)

## Version number

The first number is the Nextcloud version. The second number is the Nextcloud point release version. The third number is the theme version.

## Progress
Theming for Core Nextcloud functionality is done. You can check on the progress of App styling and request styling for specific apps [here](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/2)

## Installation
The master branch will always be the current stable release so you can clone that for easy installation and updates. Using git is currently the recommended way of installing the theme. You can also download it as a zip file either straight from the master branch, or on the release page.

To install the theme please start by disabling the Theming app which comes with Nextcloud, it is know to cause issues with custom themes.

Next, git clone or unzip it into your **nextcloud/themes** folder.

To enable the theme, add or change the theme option in your **config.php** to:

    'theme' => 'nextcloud-breeze-dark',

## Contributions

The theme is written with [Sass](http://sass-lang.com/).

Please have a look at the CONTRIBUTING.md for details on how to contribute.