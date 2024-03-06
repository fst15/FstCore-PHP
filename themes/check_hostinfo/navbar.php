<?php

class navbar
{

  function __construct()
  {
  }

  public function init()
  {
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="../home"><div class="navbar-brand-class"></div></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item nav-item-bar">
              <a class="nav-link" aria-current="page" href="../ip-info">IP Info</a>
          </li>
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../check-port">Check Port</a>
          </li>
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../about">About</a>
          </li>
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../contact-us">Contact Us</a>
          </li>
          <!--<li class="nav-item nav-item-bar">
              <a class="nav-link" href="../api-docs">API</a>
          </li>-->
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../sitemap">Site Map</a>
          </li>
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../privacy">Privacy Policy</a>
          </li>
          <li class="nav-item nav-item-bar">
              <a class="nav-link" href="../term-services">Terms of Service</a>
          </li>
          <!--<li class="nav-item nav-item-bar">
              <a class="nav-link" href="#"><i class="bi bi-rss"></i> Rss Feed</a>
          </li>-->
      </ul>
      <!--<div class="container" style="max-width:35%;">            
      </div>-->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link"></a>
          </li>
          <li class="nav-item">
              <a class="nav-link"></a>
          </li>
      </ul>

      <!--<form role="search" class="d-flex">
              <input class="form-control input-data" type="search" placeholder="Search" aria-label="Search" style="border: 1px solid white;border-radius:10px;">
              <button class="btn btn-outline-primary btn-action" type="submit"><i class="bi bi-search"></i></button>-->
      </form>
      </div>
      </div>
      </nav>';
  }

  function __destruct()
  {
  }
  
}
