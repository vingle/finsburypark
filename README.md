# "Finsbury Park" CiviCRM Admin theme

![Screenshot](/images/screenshot.png)

This is a small cross-CMS theme for the CiviCRM admin interface. 

The main css file aims to work across CMS with basic responsive support at under 125kb (excluding fonts & gifs & BootStrap). 

It has been tested on Drupal 7, Drupal 8, Wordpress and Joomla and is based on the [Shelford single-file theme](https://github.com/vingle/civicrm-shelford) for testing.

The extension is licensed under [AGPL-3.0](LICENSE.txt).


## Installation (Web UI)

This extension has not yet been published for installation via the web UI.


## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl finsburypark@https://github.com/vingle/finsburypark/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/vingle/finsburypark.git
cv en finsburypark
```

## Usage

After installing the extension, select it via Nav menu > Administer > Customize Data and Screens > Display Preferences, and save.


## Changelog / known issues

Version 0.12 - improved Cases/Reports handling. PHP7.4 (thanks @mmjwconsult). Updated for v5.37.1

Version 0.11 - some fixes, styles Afform. Updated for version 5.35

Version 0.10 - adds Bootstrap to everything, styles API4 Explorer & SearchKit

Version 0.9 - updated for version 5.33.2

Version 0.8 - further button tidying

Version 0.7 - updated for CiviCRM 5.31.0, fixed extension accordion bug.

Version 0.6 - updated for CiviCRM 5.30.0

Version 0.5 - updated for CiviCRM 5.27.4

Version 0.4 - added Drupal 8 support

Version 0.2 - added Wordpress support, merged css, basic responsiveness.
- Uses colour variables so will not work on Internet Explorer (flag if this is an issue and fallbacks can be added)
- .Woff versions of fonts used as the smallest - but ttf and otf versions are included. To further improve speed, change font-family to 'inherit' to use the theme fonts (FontAwesome is still needed)
- Many sprites have been removed - animated gifs (loaders) are kept, as are a few sprites that are either hard to replace with FA (ie the select2 dropdown arrows), or whose use is unclear
- More testing is needed, issues welcome.

Version 0.1 
- is a quick merge of the default civicrm.css and civicrm-shelford.css. This means some sprite paths may be broken and there are duplicate selectors.
- use of CSS variables not supported by IE or < MS Edge 15.
- not tested on Wordpress, Backdrop or Drupal 8.
