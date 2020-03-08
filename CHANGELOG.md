# Changelog

## [Unreleased]
### Fixed
- [#100](https://github.com/mwalbeck/nextcloud-breeze-dark/issues/100) Fix theming for account registration

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
