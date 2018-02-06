# Contributing

## Question and help

If you have any question or need help with setting up the theme, please open a new issue.

## Bug Reporting

If you would like to report a bug please open a new issue. If you would like to fix the bug yourself please specify it in the issue.

When reporting a bug please provide the following information:

* Version of Nextcloud
* Version of this theme (Can be found at the top of server.scss)
* Which browser you are using and the version of said browser

## Feature/styling Requests

If you would like something added to the theme please open up a new issue. If you would like styling added for a specific app or add that styling yourselves, please open a new issue.

## Pull Requests

Before making a pull request please open a new issue with what you want to change and why.

You can find the colours used for the theme and their variable names in **core/_colours.scss**. Changes to icons should go in the **core/_icons.scss**. Changes to Nextcloud core should go in **core/_server.scss**. Styling for apps can be found in the **apps** folder with a specific file for each app. For new apps please place the styling in a new file called **_APPNAME.scss** in the **apps** directory and import it at the bottom of **server.scss**.

Please make your pull requests to the **develop** branch.