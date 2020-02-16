<?php 
// YOU MUST CHANGE THIS! -- Define the Base URL for development or production.
define("BASE_URL", "http://localhost:8888/");
define("ROOT_PATH", "http://localhost:8888/");


// set class name as page
$pageName = basename($_SERVER['SCRIPT_NAME']);
$pageClassInit = str_replace("/", "", $pageName);
$pageClass = str_replace(".php", "", $pageClassInit);
if ($pageClass == NULL || $pageClass == "index" ) {
    $pageClass = "home";
}


// Use to implement Data URI images within the pages
function dataImage($path) {
    return 'data:image/jpeg;base64,' . base64_encode(file_get_contents( ROOT_PATH . 'images/' . $path ));
}
