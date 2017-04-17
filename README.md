# Nextcloud Breeze Dark Theme
This is a Breeze Dark Theme for Nextcloud

## Progress
Currently theming is done for standard Nextcloud aswell as the following apps: 

* Activity
* Announcement Center
* AppOrder
* Auditing/Logging
* Calendar
* Checksum
* Collaborative tags
* Comments
* Contacts
* Deleted files
* External sites
* External storage support
* File access control
* File Sharing
* Files automated tagging
* First run wizard
* Gallery
* Log reader
* Mail template editor
* Nextcloud announcements
* News
* Notes
* Notifications
* Password policy
* PDF Viewer
* Retention
* Server info
* Theming
* Two Factor TOTP Provider
* Two Factor U2F
* Update notifications
* Usage survey
* Versions
* Video player

The following apps are not fully tested but should work or are only partially working.

* Text editor (header bar is dark theme, the editing area is light theme, currently missing a proper way to style it)
* Default encryption module (should work, not fully tested)
* Federation (should work, not fully tested)
* Share by mail (should work, not fully tested)

## Installation
The master branch will always be the current stable release so you can clone that for easy installation and updates.

You can also download it as a zip file and extract it to your themes folder.

To enable the theme, add or change the theme option in your config.php to:

    'theme' => 'nextcloud-breeze-dark',