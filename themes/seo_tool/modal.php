<?php

class modal{

    function __construct(){

    }

    public function notfound_content()
    {
      echo '<div class="col">
                      <div class="row">
                          <div class="col">
                              <div class="container" style="padding: 50px;border: 1px solid white;border-radius: 5px;background-color: rgb(176, 218, 252);">
                                  <center><i class="bi bi-x-circle"></i> Result not found</center>
                              </div>
                          </div>
                      </div>
              </div>';
    }
  
    public function labelbar()
    {
      echo '<div class="container data-content" style="padding: 0px !important;"><div class="row label-bar">
          <div class="col">
          <div class="card label-bar-card">
          <div class="card-body">
          <p class="card-text">
          <center><a href="/ip-info" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> IP Info</a></center>
          </p>        
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card label-bar-card">
          <div class="card-body">
          <p class="card-text">
          <center><a href="/check-port" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> Check Port</a></center>
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
          <center><a href="/whois" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> Whois</a></center>
          </p>        
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card label-bar-card">
          <div class="card-body">
          <p class="card-text">
          <center><a href="/dns-lookup" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> DNS Lookup</a></center>
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
          <center><a href="/reversedns-lookup" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> Reverse DNS Lookup</a></center>
          </p>        
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card label-bar-card">
          <div class="card-body">
          <p class="card-text">
          <center><a href="/my-useragent" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> My UserAgent</a></center>
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
          <center><a href="../checkhost-alive" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> Check Host Alive</a></center>
          </p>        
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card label-bar-card">
          <div class="card-body">
          <p class="card-text">
          <center><a href="../http-request" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> HTTP Header Request</a></center>
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
          <center><a href="/speedtest" class="stretched-link label-bar-text"><i class="bi bi-hdd-stack"></i> Internet Speed Test</a></center>
          </p>        
          </div>
          </div>
          </div>
          </div></div>';
    }

    function __destruct(){

    }
    
}

?>