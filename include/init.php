<?php
set_time_limit(0);
ini_set('memory_limit', '256M');
$basedir = preg_replace('/\/include.*/', '', __DIR__);
require_once($basedir . '/include/app/App.php');
require_once($basedir . '/include/php/Manager.php');
require_once($basedir . '/include/theme/Theme.php');


/**
 * 
 * 
 * 
 *  Fst-Core PHP CLI & Web backend library code by @fst15
 * 
 *  @ Library contains : App.php, Manager.php, Theme.php
 *  @ App.php : App for init website environment
 *  @ Manager.php : Data manager and proccess data output
 *  @ Theme.php : Theme manager for init website theme
 * 
 *  @github.com : @fst15
 * 
 **/

$fs = new FileSystem();
$encoder = new Encoder();
$env_json = $encoder->jsonn_decode($fs->readfile($GLOBALS['basedir'] . '/data/env/', 'init.json'));
$domain = $env_json->domain;
$theme_name = $env_json->theme;
$ssl = $env_json->ssl;
$force_ssl = $env_json->force_ssl;
$support_email = $env_json->support_email;

//App initializing
$app = new App();
$app->domain = $domain;
$app->ssl = $ssl;
$app->force_ssl = $force_ssl;
$app->support_email = $support_email;
$app->force_ssl();
$app->theme($theme_name);

//Themes initializing
$theme = new Theme();

//Proccess initializing
$ps = new Manager();
