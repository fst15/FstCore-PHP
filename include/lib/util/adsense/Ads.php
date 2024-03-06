<?php
require_once($basedir.'/include/lib/util/text/Text.php');
require_once($basedir.'/include/lib/util/filesystem/FileSystem.php');

class Ads
{

    private $ad_name = null;
    private $ad_json = null;
    private $text = null;
    private $fs = null;

    function __construct()
    {
        $fs = new FileSystem();
        $text = new Text();
        $ad_json = $fs->readfile('../../../data/env/', 'ad.json');
    }

    public function set_ad($name)
    {
        $this->ad_name = $name;
    }

    public function get_js()
    {
        return $this->ad_json[$this->ad_name]['js'];
    }

    public function get_ad_unit($type)
    {
        return $this->ad_json[$this->ad_name]['ad_unit'][$type];
    }

    function __destruct()
    {
    }
    
}
