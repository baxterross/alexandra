<?php

define('SERVER_NAME', $_SERVER['SERVER_NAME']);

define('ROOT', __DIR__);

define('JQUERY', ROOT.'/js/jquery-1.9.1.min.js');
define('JCOLOR', ROOT.'/js/jquery-ui.min.js');
define('MAINJS', ROOT.'/js/main.js');
define('MAINCSS', ROOT.'/css/main.css');

define('FANCYBOX_JS', ROOT.'/js/fancybox.2.1.4.js');
define('FANCYBOX_CSS', ROOT.'/css/fancybox.2.1.4.css');

define('SITE', 'http://'.SERVER_NAME);
define('IMG', SITE.'/img');

include(ROOT.'/templates.php');

include(ROOT.'/library.php');

include(ROOT.'/videos.php');

?>