<?php

class meta{

    function __construct(){

    }

    public function init()
    {
        $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo '<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        
        <title>Check HostInfo</title>
        <meta name="title" content="Check HostInfo" />
        <meta name="description" content="With Check HostInfo you can check information about ip address host dns whois record browser environment and internet speed benchmark" />

        <meta property="og:type" content="website" />
        <meta property="og:url" content="'.$actual_link.'" />
        <meta property="og:title" content="Check HostInfo" />
        <meta property="og:description" content="With Check HostInfo you can check information about ip address host dns whois record browser environment and internet speed benchmark" />
        <meta property="og:image" content="https://www.check-hostinfo.my.id/images/check-hostinfo.png" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="'.$actual_link.'" />
        <meta property="twitter:title" content="Check HostInfo" />
        <meta property="twitter:description" content="With Check HostInfo you can check information about ip address host dns whois record browser environment and internet speed benchmark" />
        <meta property="twitter:image" content="https://www.check-hostinfo.my.id/images/check-hostinfo.png" />

        <meta name="google-adsense-account" content="ca-pub-6398750084433843">

        <link rel="icon" href="https://www.check-hostinfo.my.id/icons/favicon.ico">
        <link rel="image_src" href="https://www.check-hostinfo.my.id/images/check-hostinfo.png"> 
        <link rel="apple-touch-icon" href="https://www.check-hostinfo.my.id/images/check-hostinfo.png">
        <link rel="shortcut icon" href="https://www.check-hostinfo.my.id/icons/favicon.ico">';
    }

    function __destruct(){

    }

}

?>