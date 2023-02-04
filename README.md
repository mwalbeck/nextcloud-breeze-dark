# Breeze Dark Theme

This is a Breeze Dark Theme for [Nextcloud](https://nextcloud.com) based on the Breeze Dark theme made by the KDE Project.

![screenshot of theme](screenshot.png)

If you have any questions, problems or anything else you're welcome to come hangout in the dedicated matrix room: #nextcloud-breeze-dark:mwalbeck.org

## Supported versions

The currently supported and maintained Nextcloud releases are:

-   Nextcloud 25

I try my best to maintain 2 Nextcloud releases at once, to allow for smoother transitions, but for various reason I might decide to drop support for older releases early.

Previous unmaintained releases:

-   Nextcloud 17-24 (App)
-   Nextcloud 11-16 (Theme folder)

## Version numbering

This project follows semantic versioning. The major version number also follows the Nextcloud version the specific release is intended for to make it easier to know what Nextcloud version the release works with.

## Installation

It's available in the [Nextcloud app store](https://apps.nextcloud.com/apps/breezedark), just search for Breeze Dark, or look under customizations.

Or you can clone this repo into your app folder and enable it in the app menu in Nextcloud.

## Usage

After you install the theme, you need to enable it. There are two options for this, a global and a personal one.

### Global

With the global options you can enforce the use of the theme for all users as well as unauthenticated visits. Please note that when the theme is enforced for all users it isn't possible for them to disable the theme or choose a different theme.

There is also an option to let the theme be enabled / disabled based on the theming preferences reported by browser. When the theme is deactivated using this method, Nextcloud will revert to using the default light theme. This setting only sets the default for when the theme is globally enforced and can be overridden by the user.

You can also choose whether the login page should be themed. Though this only has an effect if the theme is enforced globally, or during the login phase of a user that has the theme enabled.

You can find the global options here:

```
Settings > Administration > Theming > Breeze Dark
```

### Personal

The personal option allows each user to enable / disable the theme unless it's being enforced by the global options. They can though choose whether the theme should follow the theming choice reported by the browser. This option is also available when the theme is being enforced globally. If the user hasn't set a prefernece they will follow the global default. You can find the personal option here:

```
Settings > Personal > Appearance and accessibility > Breeze Dark
```

### Custom styling

Under the Theming section in the admin settings you can add your own custom styling to the theme. Only standard CSS can be used. This custom styling will be applied whenever the theme is enabled and only affects the Breeze Dark theme.

## Contributions

### Issues

If you find an issue with the theme I would greatly appreciate it if you opened a bug report, so it can be fixed.

You're also very welcome to open a styling request, if there is an app you would like to see supported by this theme.

A full list of supported apps can be found on the [wiki](https://github.com/mwalbeck/nextcloud-breeze-dark/wiki/Styled-apps).

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
