<?php

class menubar{

    function __function(){

    }

    public function init(){
        echo '
<div class="container data-content" style="padding: 0px !important;">
        <div class="row label-bar">
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/ip-info" class="label-bar-text"><i class="bi bi-hdd-stack"></i> IP Info</a></center>
        </p>        
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/check-port" class="label-bar-text"><i class="bi bi-hdd-stack"></i> Check Port</a></center>
        </p>
        </div>
        </div>
        </div>
        </div>
        <div class="row label-bar">
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/whois" class="label-bar-text"><i class="bi bi-hdd-stack"></i> Whois</a></center>
        </p>        
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/dns-lookup" class="label-bar-text"><i class="bi bi-hdd-stack"></i> DNS Lookup</a></center>
        </p>        
        </div>
        </div>
        </div>
        </div>
        <div class="row label-bar">
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/my-useragent" class="label-bar-text"><i class="bi bi-hdd-stack"></i> My UserAgent</a></center>
        </p>        
        </div>
        </div>
        </div>
        <div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="/speedtest" class="label-bar-text"><i class="bi bi-hdd-stack"></i> Internet Speed Test</a></center>
        </p>        
        </div>
        </div>
        </div>
        </div>
        <div class="row label-bar">
        <!--<div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="#" class="label-bar-text"><i class="bi bi-hdd-stack"></i> Check Host Alive</a></center>
        </p>        
        </div>
        </div>
        </div>-->
        <!--<div class="col">
        <div class="card label-bar-card">
        <div class="card-body">
        <p class="card-text">
        <center><a href="#" class="label-bar-text"><i class="bi bi-hdd-stack"></i> HTTP Header Request</a></center>
        </p>        
        </div>
        </div>
        </div>-->
        </div></div>';
    }

    function __destruct()
    {
        
    }

}

?>
