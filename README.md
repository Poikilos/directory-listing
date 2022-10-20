# Directory Listing Redux
(a fork of Evoluted Directory Listing Script)

Directory Listing Redux supports config.php, audio, links (.desktop files).


## Differences in Directory Listing Redux
(by Poikilos)
- audio player (by [apanagio](https://github.com/apanagio)).
- URLs become hyperlinks (X .desktop file with Type=Link, and [blnk](https://github.com/poikilos/blnk) files).
- config.php (See [config.example.php](config.example.php)) so you can stay up to date (see [Install](#install))!
- See also: [changelog.md](changelog.md)


## System Requirements
- PHP Version 5.3 or greater (5.6 recommended)
- GD Image Library
- ZipArchive PHP Extention (optional)


## Install
1. Unzip the provided files
2. Symlink to index.php from your local copy of the git repo to your folder.
   - example: `ln -s index.php /var/www/html/downloads/`
   - This allows you to update the repo with `git pull`. You won't need
     to modify the index.php file for different directories anymore in
     the Redux--just use config.php
     (example: `cp --no-clobber config.example.php /var/www/html/downloads/config.php`).
3. Modify config.php as necessary.
4. You're done! Browse to the directory to see the script in action!


## Use
### Add links
First install blnk:
`python3 -m pip install --user --upgrade https://github.com/poikilos/blnk/archive/refs/heads/main.zip`

To add links, provide -s (shortcut), a URL, and a title:
`cd downloads && blnk -s https://example.com "Example Website"`


## Development
### Test
```
php -S 127.0.0.1:8000
```
