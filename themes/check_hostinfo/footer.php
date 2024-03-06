<?php

class footer{

    function __construct()
    {
        
    }

    public function simple(){
        echo '<footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="../ip-info" class="nav-link px-2 text-muted">IP Info</a></li>
        <li class="nav-item"><a href="../check-port" class="nav-link px-2 text-muted">Check Port</a></li>
        <li class="nav-item"><a href="../privacy" class="nav-link px-2 text-muted">Privacy & Policy</a></li>
        <li class="nav-item"><a href="../about" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="../contact-us" class="nav-link px-2 text-muted">Contact Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">API</a></li>
        </ul>
        <center><img src="/images/check-hostinfo.png" width="60" height="60"></center>
        <p class="text-center text-light">&copy; ' . date('Y') . ' <a href="https://www.check-hostinfo.my.id/"><b>CheckHostInfo</b></a> made with <i class="bi bi-heart-fill" style="color: red;"></i></p>
        </footer>';
    }

    public function init(){
        echo '<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </symbol>
        <symbol id="reddit" viewBox="0 0 16 16">
            <path d="M6.167 8a.83.83 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661m1.843 3.647c.315 0 1.403-.038 1.976-.611a.23.23 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83s.83-.381.83-.83a.831.831 0 0 0-1.66 0z"/>
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.2.2 0 0 0-.153.028.2.2 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224q-.03.17-.029.353c0 1.795 2.091 3.256 4.669 3.256s4.668-1.451 4.668-3.256c0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165"/>
        </symbol>
        </svg>
        <div class="container" style="margin-bottom: -19px;">
        <footer class="py-5">
            <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <u><h6>Menu</h6></u>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../home" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <!--<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">API</a></li>-->
                    <li class="nav-item mb-2"><a href="../about" class="nav-link p-0 text-body-secondary">About</a></li>
                    <li class="nav-item mb-2"><a href="../contact-us" class="nav-link p-0 text-body-secondary">Contact Us</a></li>
                    <li class="nav-item mb-2"><a href="../sitemap" class="nav-link p-0 text-body-secondary">Sitemap</a></li>
                    <!--<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Rss Feed</a></li>-->
                    <li class="nav-item mb-2"><a href="../privacy" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
                    <li class="nav-item mb-2"><a href="../term-services" class="nav-link p-0 text-body-secondary">Terms of Service</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-3 mb-3">
                <u><h6>Toolbox</h6></u>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="../ip-info" class="nav-link p-0 text-body-secondary">IP Info</a></li>
                    <li class="nav-item mb-2"><a href="../check-port" class="nav-link p-0 text-body-secondary">Check Port</a></li>
                    <li class="nav-item mb-2"><a href="../whois" class="nav-link p-0 text-body-secondary">Whois</a></li>
                    <li class="nav-item mb-2"><a href="../dns-lookup" class="nav-link p-0 text-body-secondary">DNS Lookup</a></li>
                    <li class="nav-item mb-2"><a href="../my-useragent" class="nav-link p-0 text-body-secondary">My UserAgent</a></li>
                    <!--<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Check Host Alive</a></li>-->
                    <!--<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">HTTP Header Request</a></li>-->
                    <li class="nav-item mb-2"><a href="../speedtest" class="nav-link p-0 text-body-secondary">Internet Speed Test</a></li>
                </ul>
            </div>

            <!--<div class="col-md-5 offset-md-1 mb-3">
                <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what\'s new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control input-data" placeholder="Email address">
                    <button class="btn btn-primary btn-action" type="button">Subscribe</button>
                </div>
                </form>
            </div>-->
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; ' . date('Y') . ' Check HostInfo, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24" style="fill: white;"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/checkhostinfoid/"><svg class="bi" width="24" height="24" style="fill: white;"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/profile.php?id=61556207078738&locale=id_ID"><svg class="bi" width="24" height="24" style="fill: white;"><use xlink:href="#facebook"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.reddit.com/r/CheckHostInfo/"><svg class="bi" width="24" height="24" style="fill: white;"><use xlink:href="#reddit"/></svg></a></li>
            </ul>
            </div>
            <center><div class="footer-image"></div></center>
            <p class="text-center text-light">&copy; ' . date('Y') . ' <a href="https://www.check-hostinfo.my.id/" style="color: white !important;">CheckHostInfo</a> made with <i class="bi bi-heart-fill" style="color: red;"></i></p>
        </footer>
        </div>';
    }

    function __destruct()
    {
        
    }

}

?>
