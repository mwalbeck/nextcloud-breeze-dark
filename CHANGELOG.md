# Changelog

## [Unreleased]

## 18.0.20 - 2020-06-21
### Fixed
- [#153](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/153) Make suspicious login chart background white to make it more readable
- [#154](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/154) Fix text colour in file conflict dialog

## 18.0.19 - 2020-06-07
### Added
- [#139](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/139) Add support for BigBlueButton
- [#116](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/116) Add support for Cookbook

## 18.0.18 - 2020-05-31
### Fixed
- [#144](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/144) Deck: Text colour and cursour is black while editing description, and fix filter_set icon and fix resource-type-deck icon in projects. Improve styling of code and blockquotes in card description.

## 18.0.17 - 2020-05-24
### Added
- [#136](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/136) Add support for App Order

## 18.0.16 - 2020-05-17
### Fixed
- [#126](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/126) Fix styling for Deck v1.0
- [#128](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/128) Fix styling for Tasks v0.13

## 18.0.15 - 2020-05-12
### Added
- [#104](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/104) Implement per user theming 

### Fixed
- [#125](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/125) Fix avatars with dot menus being covered in dots

## 18.0.14 - 2020-05-02
### Added
- Add repair step to set the theme to be enabled by default going forward, will be off by default starting with 18.0.15
- [#119](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/119) Add styling for ocDownloader

### Fixed
- [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Fix colour of icons in hamburger menu
- [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Fix background colour for readonly input in settings
- [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) jsxc: Force background colour for incoming messages to fix messages in muc's
- [#124](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/124) jsxc: Fix load more messages button in chat window

## 18.0.13 - 2020-04-26
### Fixed
- Make text colour in Users section white again after adding variable --color-text-dark
- [#117](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/117) Calendar: Highlight selected items in repeat section
- [#118](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/118) Change filter rule for icons in contactsmenu to a generic one

### Added
- [#113](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/113) Add styling for jsxc v4.0

## 18.0.12 - 2020-04-18
### Fixed
- [#110](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/110) Mail: Change email content view to more closely assemble upstream and improve visual of attachments
- Mail: Adjust font colour for mail sender and subject in email list and reapply attachment styling for Mail 1.3
- [#111](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/111) Change default text selection colour
- [#112](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/112) Deck: Make due date icon colour and background consistent

## 18.0.11 - 2020-04-11
### Fixed
- [#106](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/106) Fix styling for Full text search
- Tasks: Fix subtask and note icons
- Data Analytics: Change opacity of links in settings
- Maps: Fix search button visually extending beyond the search bar

### Added
- Calendar: Add styling for new event color picker

## 18.0.10 - 2020-03-22
### Fixed
- [#102](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/102) Set .icon-talk globally as it is used by other apps than just Talk
- [#103](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/103) Fix Quick Notes icon definitions and remove unused sass variable, remove box-shadow on hover on .quicknote

## 18.0.9 - 2020-03-15
### Fixed
- [#101](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/101) Fix icons for Tasks 0.12.0+

## 18.0.8 - 2020-03-08
### Fixed
- [#100](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/100) Fix theming for account registration

### Added
- [#92](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/92) Add styling for Data Analytics

## 18.0.7 - 2020-02-25
### Fixed
- [#96](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/96) Fix styling for routing dialog in maps
- [#97](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/97) Use relativ paths for backgrounds, and when using custom backgrounds don't use colour from theming app as background
- [#93](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/93) Fix icons staying light after deactivating the theme
- Invert app-dark, password and star icons on activity list
- Fix missing bottom-border on .oc-dialog boxes

### Removed
- Old icons rules for Gallery app

## 18.0.6 - 2020-02-16
### Fixed
- [#95](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/95) Fix styling for Two-factor TOTP and 2fa selection screen on login when having multiple 2fa's enabled

## 18.0.5 - 2020-02-11
### Fixed
- [#90](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/90) Add icon variable definition for --icon-checkmark-f2f2f2
- Fix icons in calendar basic editor not being correct colour.

### Added
- [#91](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/91) Added styling support for Terms of Service app.

## 18.0.4 - 2020-02-05
### Fixed
- [#87](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/87) Fix custom background for login screen, set in theming app, not showing
- [#88](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/88) Change background and border behaviour on error and success on public poll page
- [#89](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/89) Fix icon color for icons in text, photos and activity icon in sidebar

## 18.0.3 - 2020-02-04
### Fixed
- [#84](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/84) Add styling support for Maps
- [#85](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/85) Make styling rule for avatar cropper important
- [#86](https://github.com/mwalbeck/nextcloud-breeze-dark/pull/86) Fix typo in README.
- Fix dark icon in notifications dropdown when empty

## 18.0.2 - 2020-01-30
### Fixed
- [#82](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/82) Fix favorites icon still showing up as black.
- Hide share icon on hover in files nav, as intended.

## 18.0.1 - 2020-01-29
### Fixed
- Fix [#82](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/82), App version showing some icons as black
- Bookmarks: Use color-main-text for folder names in breadcrumbs instead of color-text-link
- Music: invert settings and play-pause icons in nav sidebar
- Passman: make icon definition important
- Polls: Use color-main-text for list of polls instead of color-text-link

## 18.0.0 - 2020-01-26
### Added
- Support for NC18
- Support for photos
- Added missing icons introduced with NC18

### Fixed
- Remove background-color rule for project sharing as to not block text
- Add global background colors to prevent white backgrounds
- Updated Calendar styling for NC18
- Updated Contacts styling for NC18
- Unset header background-image
- Use dark colours for background on login page
- Actually apply styling for load all completed tasks button
- Fix background-color for number inputs in tasks

### Removed
- Styling for Gallery

## 17.0.3 - 2020-01-18
### Added
- Website and screenshot metadata to info.xml

### Fixed
- Revamp styling for Calendar 2.0
- Fix css class for social icons
- Invert personal activity icon
- Add notifications-dark icon

## 17.0.2 - 2020-01-06
### Added
- Initial app release
