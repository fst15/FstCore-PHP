<?php

class breadcumb
{

    function __construct()
    {
    }

    public function init($id)
    {
        switch ($id) {
            case 'home':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                      </ol>
                    </nav>';
                break;
            case 'ipinfo':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">IP Address Info</li>
                      </ol>
                    </nav>';
                break;
            case 'checkport':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">IP Address Info</li>
                      </ol>
                    </nav>';
                break;
            case 'whois':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Whois</li>
                      </ol>
                    </nav>';
                break;
            case 'dnslookup':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DNS Lookup</li>
                      </ol>
                    </nav>';
                break;
            case 'myuseragent':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My UserAgent</li>
                      </ol>
                    </nav>';
                break;
            case 'speedtest':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Internet Speed Benchmark</li>
                      </ol>
                    </nav>';
                break;
            case 'about':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                      </ol>
                    </nav>';
                break;
            case 'contact':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                      </ol>
                    </nav>';
                break;
            case 'sitemap':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                      </ol>
                    </nav>';
                break;
            case 'privacy':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                      </ol>
                    </nav>';
                break;
            case 'terms':
                echo '<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Terms of Service</li>
                      </ol>
                    </nav>';
                break;
            default:
                break;
        }
    }

    function __destruct()
    {
      echo '<div data-mndbanid="a0fb54cf-96f0-4d2c-9247-deb8ad1a4b8c"></div>';
    }
    
}
