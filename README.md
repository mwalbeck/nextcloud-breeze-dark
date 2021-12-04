# Breeze Dark Theme

This is a Breeze Dark Theme for [Nextcloud](https://nextcloud.com) based on the Breeze Dark theme made by the KDE Project.

![screenshot of theme](screenshot.png)

If you have any questions, problems or anything else you're welcome to come hangout in the dedicated matrix room: #nextcloud-breeze-dark:mwalbeck.org

## Supported versions

The currently supported and maintained Nextcloud releases are:

-   Nextcloud 23
-   Nextcloud 22

I try my best to maintain 2 Nextcloud releases at once, to allow for smoother transitions, but for various reason I might decide to drop support for older releases early.

Previous unmaintained releases:

-   Nextcloud 21
-   Nextcloud 20
-   Nextcloud 19
-   Nextcloud 18
-   Nextcloud 17
-   Nextcloud 11-16

## Version numbering

This project follows semantic versioning. The major version number also follows the Nextcloud version the specific release is intended for to make it easier to know what Nextcloud version the release works with.

## Installation

It's available in the [Nextcloud app store](https://apps.nextcloud.com/apps/breezedark), just search for Breeze Dark, or look under customizations.

Or you can clone this repo into your app folder and enable it in the app menu in Nextcloud.

## Usage

After you install the theme, you need to enable it. There are two options for this, a global and a personal one.

### Global

The global option enables the theme by default for all users and unauthenticated visits. Without this option items like the login and sharing pages won't be styled. You can also decide to automatically enable or disable the theme based on the theming choice reported by the browser. In the global options you will also find an option to exclude the login page from being themed. You can find the global options here:

```
Admin settings > Theming > Breeze Dark
```

Please note that you need the Theming app enabled in Nextcloud to access the global settings.

### Personal

The personal option allows each user to set their own preference independent of how you set the global option. If the user hasn't set an option yet, they will follow the global option. They can also choose, independently, if they want the theme to match the theming choice reported by the browser. You can find the personal option here:

```
Personal settings > Accessibility > Breeze Dark
```

Please note that you need the Accessibility app enabled in Nextcloud to access the personal setting.

### Custom styling

Under the Theming section in the admin settings you can add your own custom styling to the theme. Only standard CSS can be used. This custom styling will be applied whenever the theme is enabled and only affects the Breeze Dark theme.

## Contributions

### Issues

If you find an issue with the theme I would greatly appreciate it if you opened a bug report, so it can be fixed.

You're also very welcome to open a styling request, if there is an app you would like to see supported by this theme.

A full list of supported apps can be found on the [wiki](https://github.com/mwalbeck/nextcloud-breeze-dark/wiki/Styled-apps).

### Pull requests

If you would like to contribute to the theme, all you need is a working Nextcloud setup and a text editor. Nextcloud is going to handle all the Sass compilation on its own. When you have Nextcloud setup, you can simply clone this repo into the app folder.

As Nextcloud caches all sass, your changes won't show up immediately. To have your changes show up an easy trick is to disable the theme, refresh the page and then enable it again. This isn't perfect, but works most of the time. If your changes don't show up, you can either wait a couple of minutes and then try again, or you can try running an **occ maintenance:repair**.

You're always welcome to open an issue and talk about the changes, you would like to make, before starting.

## Donations

If you like the theme and would like to donate you can use the following ways:

**Liberapay:**  
https://liberapay.com/mwalbeck/

**Ko-fi:**  
https://ko-fi.com/mwalbeck

**PayPal:**  
https://www.paypal.me/magnuswalbeck

**Crypto:**  
BTC: bc1ql59kgyrhx0l252d8xan2rrvrtz64j2zr8zucmf  
LTC: ltc1qzn9appss8ecadz9yts46u4vacm9ehwhc29uq4d  
XMR: 84eXmuNS5RKWnn3YqAmk71U8EkHi2dqLRZN87si5UUdoQp9YPCwL4WFVz84j5hcDmZPkHzFVwM1aGDTfpdaFqQ64PuuLUj2

Thank you!
