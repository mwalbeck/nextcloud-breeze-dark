# Nextcloud Breeze Dark Theme
This is a Breeze Dark Theme for Nextcloud based on the Breeze Dark theme made by the KDE Project.

The icons are from the default Nextcloud theme, with the colors changed to better fit a dark theme.

## Progress
Theming for Core Nextcloud functionality is done. You can check on the progress of App styling and request styling for specific apps [here](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/2)

## Installation
The master branch will always be the current stable release so you can clone that for easy installation and updates.

You can also download it as a zip file and extract it to your themes folder.

To enable the theme, add or change the theme option in your config.php to:

    'theme' => 'nextcloud-breeze-dark',

## Contributions

The theme is written with [Sass](http://sass-lang.com/).

If you would like to contribute please make your pull requests to the **develop** branch.

You can find the colours and their variable names in _colours.scss. Any changes to icons should go in the _icons.scss. Changes to Nextcloud core should go in styles.scss. For new apps please place the styling in a new file called _APPNAME.scss and import it at the bottom of style.scss.

If you would like to contribute with styling for an app not currently styled, then please open a new issue.