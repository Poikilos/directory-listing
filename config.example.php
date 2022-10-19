<?php
$CONFIG = array(
    // The top level directory where this script is located, or alternatively one of it's sub-directories
    'startDirectory' => '.',
    // An optional title to show in the address bar and at the top of your page (set to null to leave blank)
    'pageTitle' => 'Evoluted Directory Listing Script',

    // The URL of this script. Optionally set if your server is unable to detect the paths of files
    'includeUrl' => false,

    // If you've enabled the includeUrl parameter above, enter the full url to the directory the index.php file
    // is located in here, followed by a forward slash.
    'directoryUrl' => 'https://example.com/main-directory-name-here/',

    // Set to true to list all sub-directories and allow them to be browsed
    'showSubDirectories' => true,

    // Set to true to open all file links in a new browser tab
    'openLinksInNewTab' => true,

    // Set to true to show thumbnail previews of any images
    'showThumbnails' => true,

    // Set to true to show an audio player for audio files
    'showAudio' => true,

    // Set to true to allow new directories to be created.
    'enableDirectoryCreation' => true,

    // Set to true to allow file uploads (NOTE: you should set a password if you enable this!)
    'enableUploads' => true,

    // Enable multi-file uploads (NOTE: This makes use of javascript libraries hosted by Google so an internet connection is required.)
    'enableMultiFileUploads' => true,

    // Set to true to overwrite files on the server if they have the same name as a file being uploaded
    'overwriteOnUpload' => false,

    // Set to true to enable file deletion options
    'enableFileDeletion' => false,

    // Set to true to enable directory deletion options (only available when the directory is empty)
    'enableDirectoryDeletion' => false,
);
?>
