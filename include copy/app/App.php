<?php
require_once($basedir.'/include/lib/Lib.php');
require_once($basedir.'/include/theme/Theme.php');
require_once($basedir.'/include/php/Proccess.php');

class App
{

    public $theme = null;
    public $database = null;
    public $encoder = null;
    public $fs = null;

    private $env_json = null;

    public $set_domain = null;
    public $ssl = false;
    public $force_ssl = false;
    public $support_email = null;

    function __construct($name = null)
    {
        $this->database = new Database();
        $this->encoder = new Encoder();
        $this->theme = new Theme();
        $this->fs = new FileSystem();
        $this->env_json = $this->encoder->jsonn_decode($this->fs->readfile($GLOBALS['basedir'].'/data/env/', 'init.json'));
        $this->set_domain = $this->env_json->domain;
        $this->ssl = $this->env_json->ssl;
        $this->force_ssl = $this->env_json->force_ssl;
        $this->support_email = $this->env_json->support_email;
    }

    public function force_ssl()
    {
        if (!(preg_match('/' . $this->set_domain . '/', $_SERVER['HTTP_HOST']))) {
            header('Location: https://www.' . $this->set_domain . '/');
            exit;
        }
    }

    function theme($theme_name)
    {
        $this->theme->set($theme_name);
    }

    function __destruct()
    {
    }

}
