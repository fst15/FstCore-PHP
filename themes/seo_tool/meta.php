<?php

class meta{

    function __construct(){

    }

    public function init()
    {
      /**
       * <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">
       * <link rel="canonical" href="https://stackoverflow.com/questions/50116416/appending-to-2-dimensional-array-in-python" />
       *
       * <meta name="twitter:card" content="summary"/>
       * <meta name="twitter:domain" content="check-hostinfo.com"/>
       * <meta name="twitter:title" property="og:title" itemprop="name" content="Appending to 2 dimensional array in python" />
       * <meta name="twitter:description" property="og:description" itemprop="description" content="" />
       */
      echo '<meta charset="utf-8">
          <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
          <meta property="og:type" content= "website" />
          <meta property="og:url" content="https://www.check-hostinfo.my.id/"/>
          <meta property="og:site_name" content="Check HostInfo" />
          <meta property="og:image" itemprop="image primaryImageOfPage" content="https://www.check-hostinfo.my.id/images/check-hostinfo.png" />
          <link rel="icon" href="https://www.check-hostinfo.my.id/icons/favicon.ico">
          <link rel="image_src" href="https://www.check-hostinfo.my.id/images/check-hostinfo.png"> 
          <link rel="apple-touch-icon" href="https://www.check-hostinfo.my.id/images/check-hostinfo.png">
          <link rel="shortcut icon" href="https://www.check-hostinfo.my.id/icons/favicon.ico">';
    }

    function __destruct(){

    }

}

?>