<?php

class Theme{

    function __construct()
    {
        
    }

    public function set($theme_name){
        include $GLOBALS['basedir'].'/themes/'.$theme_name.'/init.php';
    }

    public function base_color($color){
        
    }

    public function border_color($color){

    }

    public function meta(){
        $meta = new meta();
        return $meta->init();
    }

    public function css(){
        $css = new css();
        return $css->init();
    }

    public function header(){
        $header = new header();
        return $header->init();
    }

    public function navbar(){
        $navbar = new navbar();
        return $navbar->init();
    }

    public function breadcumb($id){
        $breadcumb = new breadcumb();
        return $breadcumb->init($id);
    }

    public function body(){
        $body = new body();
        return $body->init();
    }

    public function scripts(){
        $scripts = new scripts();
        return $scripts->init();
    }

    public function footer(){
        $footer = new footer();
        return $footer->init();
    }

    public function menubar(){
        $menubar = new menubar();
        return $menubar->init();
    }

    public function modal(){
        $modal = new modal();
        return $modal->init();
    }

    public function error($type){
        $error = new error();
        return $error->init($type);
    }

    function __destruct()
    {
        
    }

}

?>
