# Changelog

## [Unreleased]

### Added

-   [#235](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/235) Polish translation. Thanks @Valdnet
-   [#236](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/236) Transifex config
-   [#228](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/228) Switch body class from theme--light to theme--dark and theme--breezedark when theme is active.

### Fixed

-   [#235](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/235) Fix translation support. Thanks @Valdnet

### Removed

-   [#238](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/238) Styling for logreader as it was redundant.

## 21.0.5 - 2021-03-16

-   Re-release of 21.0.4

## 21.0.4 - 2021-03-16

### Fixed

-   [#231](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/231) Fix icon spam when creating new project in Cospend
-   [#233](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/233) Fix missing certificate in signature.json

## 21.0.3 - 2021-03-14

### Add

-   [#165](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/165) Add styling for GpxPod and invert gpxpod icon in files right click menu
-   [#225](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/225) Notes: Add notes transparent icon
-   [#229](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/229) Sign code in release pipeline and switch shell script out with Makefile

### Changed

-   Only load custom styling when there actually is custom styling to get

### Fixed

-   [#222](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/222) Override announcement center icon globally
-   [#224](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/224) Fix background colour for quota progress bar being the same as main background colour and switch it to --color-border

## 21.0.2 - 2021-02-27

### Added

-   [#152](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/152) Styling for PhoneTrack
-   [#166](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/166) Styling for GpxMotion and adjust link colour for PhoneTrack
-   Github Actions workflows

### Fixed

-   [#218](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/218) Don't invert app icons in app store sidebar

## 21.0.1 - 2021-02-23

### Fixed

-   Move getCustomStyling to own controller so we don't call getUID when no user is active

## 21.0.0 - 2021-02-20

### Added

-   [#202](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/202) Support for Nextcloud 21

### Changed

-   Added new screenshot of Nextcloud 21

### Fixed

-   [#213](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/213) Deck: Use light icon for .icon-reply

### Removed

-   Support for Nextcloud 19

## 20.0.5 - 2021-02-20

### Added

-   [#204](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/204) Support for custom styling

### Changed

-   Remove opacity from app-navigation

### Fixed

-   [#207](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/207) Deck: Missing border when hovering over board list in app navigation
-   [#196](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/196) Mail: Remove HTML email background as it is now applied by Mail itself.
-   [#209](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/209) Mail: Fix styling of vue-treeselect dropdown in settings
-   Reintroduce transparent header on Dashboard while still fixing dark box around logo on password protected shares

### Removed

-   Version and date from stylesheet

## 20.0.4 - 2021-02-06

### Fixed

-   [#188](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/188) Phone Sync: Make messages readable again and general style improvements
-   [#201](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/201) Cirlces: Fix background-colour on description. Invert colour of add user icon. Fix icon repeat on status field.

## 20.0.3 - 2021-01-17

### Fixed

-   [#195](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/195) Limit #header rule so it doesn't apply to #body-login. Slight change look of password input for password protected shares.
-   [#194](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/194) Add clarification to usage instructions that the Theming and Accessibility apps need to be enabled to access the settings.

## 20.0.2 - 2020-12-20

### Added

-   Mail: Important icon

### Fixed

-   [#191](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/191) Uncomment --color-text-selection and change to --color-hover-blue to keep amount of colours low. Unset border in Deck description when editing.
-   [#185](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/185) 2FA login page is unstyled even when login page theming is enabled.
-   [#190](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/190) Mail: change #app-content to .app-content so styling is applied properly to newer mail versions.
-   Mail: Move forward and junk icons out of .app-mail class to apply globally, fixes black icons in dropdowns in Mail. Cleanup code.

## 20.0.1 - 2020-11-07

### Added

-   [#161](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/161) Add thumbnail image in personal settings
-   [#170](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/170) Define background and text color for select options to prevent white text on white background
-   Add weather_status app icon and notes app icon
-   [#173](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/173) Add support for Forms
-   Add icon-view-list icon for Calendar
-   [#155](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/155) Allow Breeze Dark theming of the login page to be disabled.
-   [#177](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/177) Switch to new NC20 bootstrap process

### Fixed

-   Fix issue where some styling imported right after icon variables would get ignored and removed during NC stylesheet compilation
-   Remove unneeded styling, add three new icons and switch a dark close icon out with a light one in Analytics
-   Add a border to toasts to make them more visible, and switch the dark close icon out with a light one
-   [#160](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/160) Passman: Unset .icon-image background-image when under .icon-label
-   [#179](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/179) Dashboard: Make header transparent on dashboard screen to mimic default behavior.
-   Calendar: Fix missing border on new event popup, fix styling for week numbers in monthly view and fix dark icons in view selector.
-   mx-input active background-color has been changed to --color-main-background instead of --color-background-darker
-   BigBlueButton: Fix background-color in dropdown under admin settings

## 20.0.0 - 2020-10-17

### Added

-   [#164](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/164) Support for Nextcloud 20
-   [#168](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/168) Support for Dashboard
-   Add play-next icon

## 19.0.6 - 2020-10-17

### Fixed

-   [#169](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/169) Fix JSXC login buttons no longer being themed after last update
-   Uncomment commented icon variables to fix missing icons
-   [#172](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/172) Re-add missing border on TOTP input field
-   Analytics: Change background-colour of favorites widgets and fix colour of ::after arrow in dropdown app-navigation menu
-   Contacts: Add highlighting to the contact list and adjust styling for contact header inputs

## 19.0.5 - 2020-10-06

### Fixed

-   #133 Rewrite core styling
-   Deck: Fix up styling in latest release of Deck
-   Calendar: Fix up styling in latest release of Calendar
-   Small fixes and changes for NC20 release

## 19.0.4 - 2020-08-08

### Fixed

-   #157 Notes: Fix background icon being redundant when renaming and cleanup unused styling

## 19.0.3 - 2020-07-18

### Fixed

-   Remove background-size rule for login page to mimic upstream behaviour
-   Make header background-color important to fix blue header

## 19.0.2 - 2020-06-21

### Fixed

-   [#153](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/153) Make suspicious login chart background white to make it more readable
-   [#154](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/154) Fix text colour in file conflict dialog

## 19.0.1 - 2020-06-07

### Added

-   [#139](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/139) Add support for BigBlueButton
-   [#116](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/116) Add support for Cookbook

### Fixed

-   [#144](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/144) Deck: Text colour and cursour is black while editing description, and fix filter_set icon and fix resource-type-deck icon in projects. Improve styling of code and blockquotes in card description.
-   Change name of root class for talk, to fix styling

## 19.0.0 - 2020-05-24

### Added

-   [#120](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/120) Initial support for Nextcloud 19

## 18.0.17 - 2020-05-24

### Added

-   [#136](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/136) Add support for App Order

## 18.0.16 - 2020-05-17

### Fixed

-   [#126](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/126) Fix styling for Deck v1.0
-   [#128](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/128) Fix styling for Tasks v0.13

## 18.0.15 - 2020-05-12

### Added

-   [#104](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/104) Implement per user theming

### Fixed

-   [#125](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/125) Fix avatars with dot menus being covered in dots

## 18.0.14 - 2020-05-02

### Added

-   Add repair step to set the theme to be enabled by default going forward, will be off by default starting with 18.0.15
-   [#119](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/119) Add styling for ocDownloader

### Fixed

-   [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Fix colour of icons in hamburger menu
-   [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Fix background colour for readonly input in settings
-   [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Force background colour for incoming messages to fix messages in muc's
-   [#124](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/124) jsxc: Fix load more messages button in chat window

## 18.0.13 - 2020-04-26

### Fixed

-   Make text colour in Users section white again after adding variable --color-text-dark
-   [#117](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/117) Calendar: Highlight selected items in repeat section
-   [#118](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/118) Change filter rule for icons in contactsmenu to a generic one

### Added

-   [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) Add styling for jsxc v4.0

## 18.0.12 - 2020-04-18

### Fixed

-   [#110](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/110) Mail: Change email content view to more closely assemble upstream and improve visual of attachments
-   Mail: Adjust font colour for mail sender and subject in email list and reapply attachment styling for Mail 1.3
-   [#111](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/111) Change default text selection colour
-   [#112](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/112) Deck: Make due date icon colour and background consistent

## 18.0.11 - 2020-04-11

### Fixed

-   [#106](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/106) Fix styling for Full text search
-   Tasks: Fix subtask and note icons
-   Data Analytics: Change opacity of links in settings
-   Maps: Fix search button visually extending beyond the search bar

### Added

-   Calendar: Add styling for new event color picker

## 18.0.10 - 2020-03-22

### Fixed

-   [#102](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/102) Set .icon-talk globally as it is used by other apps than just Talk
-   [#103](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/103) Fix Quick Notes icon definitions and remove unused sass variable, remove box-shadow on hover on .quicknote

## 18.0.9 - 2020-03-15

### Fixed

-   [#101](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/101) Fix icons for Tasks 0.12.0+

## 18.0.8 - 2020-03-08

### Fixed

-   [#100](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/100) Fix theming for account registration

### Added

-   [#92](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/92) Add styling for Data Analytics

## 18.0.7 - 2020-02-25

### Fixed

-   [#96](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/96) Fix styling for routing dialog in maps
-   [#97](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/97) Use relativ paths for backgrounds, and when using custom backgrounds don't use colour from theming app as background
-   [#93](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/93) Fix icons staying light after deactivating the theme
-   Invert app-dark, password and star icons on activity list
-   Fix missing bottom-border on .oc-dialog boxes

### Removed

-   Old icons rules for Gallery app

## 18.0.6 - 2020-02-16

### Fixed

-   [#95](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/95) Fix styling for Two-factor TOTP and 2fa selection screen on login when having multiple 2fa's enabled

## 18.0.5 - 2020-02-11

### Fixed

-   [#90](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/90) Add icon variable definition for --icon-checkmark-f2f2f2
-   Fix icons in calendar basic editor not being correct colour.

### Added

-   [#91](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/91) Added styling support for Terms of Service app.

## 18.0.4 - 2020-02-05

### Fixed

-   [#87](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/87) Fix custom background for login screen, set in theming app, not showing
-   [#88](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/88) Change background and border behaviour on error and success on public poll page
-   [#89](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/89) Fix icon color for icons in text, photos and activity icon in sidebar

## 18.0.3 - 2020-02-04

### Fixed

-   [#84](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/84) Add styling support for Maps
-   [#85](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/85) Make styling rule for avatar cropper important
-   [#86](https://github.com/mwalbeck/nextcloud-breeze-dark/pull/86) Fix typo in README.
-   Fix dark icon in notifications dropdown when empty

## 18.0.2 - 2020-01-30

### Fixed

-   [#82](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/82) Fix favorites icon still showing up as black.
-   Hide share icon on hover in files nav, as intended.

## 18.0.1 - 2020-01-29

### Fixed

-   Fix [#82](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/82), App version showing some icons as black
-   Bookmarks: Use color-main-text for folder names in breadcrumbs instead of color-text-link
-   Music: invert settings and play-pause icons in nav sidebar
-   Passman: make icon definition important
-   Polls: Use color-main-text for list of polls instead of color-text-link

## 18.0.0 - 2020-01-26

### Added

-   Support for NC18
-   Support for photos
-   Added missing icons introduced with NC18

### Fixed

-   Remove background-color rule for project sharing as to not block text
-   Add global background colors to prevent white backgrounds
-   Updated Calendar styling for NC18
-   Updated Contacts styling for NC18
-   Unset header background-image
-   Use dark colours for background on login page
-   Actually apply styling for load all completed tasks button
-   Fix background-color for number inputs in tasks

### Removed

-   Styling for Gallery

## 17.0.3 - 2020-01-18

### Added

-   Website and screenshot metadata to info.xml

### Fixed

-   Revamp styling for Calendar 2.0
-   Fix css class for social icons
-   Invert personal activity icon
-   Add notifications-dark icon

## 17.0.2 - 2020-01-06

### Added

-   Initial app release
