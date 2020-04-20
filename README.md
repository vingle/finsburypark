# "Finsbury Park" CiviCRM Admin theme

![Screenshot](/images/screenshot.png)

This is a light-weight cross-CMS theme for the CiviCRM admin interface. 

It aims to work across the D7, Wordpress and Joomla, and offer basic responsive support at under 120kb (excluding fonts & gifs). 

It has been tested on Drupal 7, Wordpress and Joomla and is based on the [Shelford single-file theme](https://github.com/vingle/civicrm-shelford) for testing.

The extension is licensed under [AGPL-3.0](LICENSE.txt).


## Installation (Web UI)

This extension has not yet been published for installation via the web UI.


## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl st.visuali.finsburypark@https://github.com/vingle/st.visuali.finsburypark/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/vingle/st.visuali.finsburypark.git
cv en finsburypark
```

## Usage

After installing the extension, select it via Nav menu > Administer > Customize Data and Screens > Display Preferences, and save.


## Known Issues

Version 0.2 - added Wordpress support, merged css, basic responsiveness.
- Uses colour variables so will not work on Internet Explorer (flag if this is an issue and fallbacks can be added)
- .Woff versions of fonts used as the smallest - but ttf and otf versions are included. To further improve speed, change font-family to 'inherit' to use the theme fonts (FontAwesome is still needed)
- Many sprites have been removed - animated gifs (loaders) are kept, as are a few sprites that are either hard to replace with FA (ie the select2 dropdown arrows), or whose use is unclear
- More testing is needed, issues welcome.

Version 0.1 
- is a quick merge of the default civicrm.css and civicrm-shelford.css. This means some sprite paths may be broken and there are duplicate selectors.
- use of CSS variables not supported by IE or < MS Edge 15.
- not tested on Wordpress, Backdrop or Drupal 8.