<?php
$basedir = preg_replace('/\/include.*/', '', __DIR__);
require_once($basedir.'/include/lib/init.php');
require_once($basedir.'/include/theme/Theme.php');

class App
{

    public $theme = null;
    public $database = null;
    public $encoder = null;

    public $domain = null;
    public $ssl = false;
    public $force_ssl = false;
    public $support_email = null;

    function __construct($name = null)
    {
        $this->database = new Database();
        $this->encoder = new Encoder();
        $this->theme = new Theme();
    }

    public function force_ssl()
    {
        if (!(preg_match('/' . $this->domain . '/', $_SERVER['HTTP_HOST']))) {
            header('Location: https://www.' . $this->domain . '/');
            exit;
        }
    }

    public function theme($theme_name)
    {
        $this->theme->set($theme_name);
    }

    function __destruct()
    {
    }

}
