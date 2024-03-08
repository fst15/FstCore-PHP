<?php
set_time_limit(0);
$basedir = preg_replace('/\/include/', '', __DIR__);
require_once($basedir.'/include/app/App.php');

/**
 * 
 *  Web back-end FS-Core library @fst15
 * 
 * 
 */

//App initializing
$app = new App();
$app->force_ssl();
$app->theme('check_hostinfo');

//Proccess initializing
$ps = new Proccess();

//Themes initializing
$theme = new Theme();

?>
