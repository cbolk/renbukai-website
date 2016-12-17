<?php 
	setlocale(LC_TIME, 'ita');
	date_default_timezone_set('Europe/Rome');
    include("./utils/class.utils.php");
    include('./utils/resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory('photos/dojo/');
    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }

?>
