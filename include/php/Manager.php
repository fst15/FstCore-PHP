<?php
$basedir = preg_replace('/\/include.*/', '', __DIR__);
require_once($basedir.'/include/lib/init.php');
require_once($basedir.'/include/theme/Theme.php');

class Manager{

    private $ads = null;
    private $database = null;
    private $encoder = null;
    private $fs = null;
    private $host = null;
    private $http = null;
    private $parser = null;
    private $smtp = null;
    private $socket = null;
    private $useragent = null;
    private $proccess = null;
    private $system = null;
    private $threadstart = null;
    private $threadutility = null;
    private $random = null;
    private $text = null; 

    private $theme = null;    
    public $client_platform = null;

    function __construct()
    {
        $this->ads = new Ads();
        $this->database = new Database();
        $this->encoder = new Encoder();
        $this->fs = new FileSystem();
        $this->host = new Host();
        $this->http = new Http();
        $this->parser = new Parser();
        $this->smtp = new Smtp();
        $this->socket = new Socket();
        $this->useragent = new UserAgent();
        $this->proccess = new Proccess();
        $this->system = new System();
        $this->threadstart = new ThreadStart();
        $this->threadutility = new ThreadUtility();
        $this->random = new Random();
        $this->text = new Text();

        $this->theme = new Theme();
        self::client();
    }

    function client()
    {
        $json = $this->useragent->check_useragent();
        $this->client_platform = $json['device']['type'];
    }

    public function check_ip_info($ip = null)
    {
        if($ip != null && $ip == ''){
            echo $this->theme->error('data_notfound');
            exit;
        }
        if ($ip == null) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $json = $this->host->check_isp($ip);
        $whois_json = $this->host->check_whois($ip);
        if ($this->client_platform == 'mobile') {
            echo '<div class="row">
            <div class="col">
            <div class="border-app">
            <table class="table table-content">
            <tr>
            <td class="label-td">IP Address :</td>
            <td>' . $json['ip'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Hostname :</td>
            <td>' . $json['hostname'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>IP Range :</td>
            <td>'.$whois_json['whois']['NetRange'].'</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>ISP :</td>
            <td>' . $json['isp'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Organization :</td>
            <td>' . $json['org'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Country :</td>
            <td>' . $json['country'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Region :</td>
            <td>' . $json['region_name'] . ', ' . $json['city'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Postal Code :</td>
            <td>' . $json['zip'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Longtitude / Latitude :</td>
            <td>' . $json['lat'] . ', ' . $json['lon'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Timezone Region :</td>
            <td>' . $json['timezone'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            </table>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <div class="border-app">
            <iframe class="form-control" width="100%" height="495" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=' . $json['lat'] . ',' . $json['lon'] . '+(CheckHostInfo)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border-radius: 0px;"><a href="https://www.maps.ie/population/">Population mapping</a></iframe>
            </div>
            </div>
            </div>';
        } else {
            echo '<div class="row">
            <div class="col-8">
            <div class="border-app">
            <table class="table table-content">
            <tr>
            <td class="label-td">IP Address :</td>
            <td>' . $json['ip'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Hostname :</td>
            <td>' . $json['hostname'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>IP Range :</td>
            <td>'.$whois_json['whois']['NetRange'].'</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>ISP :</td>
            <td>' . $json['isp'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Organization :</td>
            <td>' . $json['org'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Country :</td>
            <td>' . $json['country'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Region :</td>
            <td>' . $json['region_name'] . ', ' . $json['city'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Postal Code :</td>
            <td>' . $json['zip'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Longtitude / Latitude :</td>
            <td>' . $json['lat'] . ', ' . $json['lon'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            <tr>
            <td>Timezone Region :</td>
            <td>' . $json['timezone'] . '</td>
            <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
            </table>
            </div>
            </div>
            <div class="col">
            <div class="border-app">
            <iframe class="form-control" width="100%" height="486" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=' . $json['lat'] . ',' . $json['lon'] . '+(CheckHostInfo)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border-radius: 0px;"><a href="https://www.maps.ie/population/">Population mapping</a></iframe>
            </div>
            </div>
            </div>';
        }
        echo '<script>$(document).ready(function(){function copyToClipboard(textToCopy){var tempTextarea = $(\'<textarea>\');$(\'body\').append(tempTextarea);tempTextarea.val(textToCopy).select();document.execCommand(\'copy\');tempTextarea.remove();}$("button[class^=\'btn btn-light btn-action copy-clipboard\']").on(\'click\', function(){var char_elem = $(this).parent().parent().children(\'td\').eq(1);var textToCopy = $(char_elem).text();copyToClipboard(textToCopy);});});</script>';
    }

    public function check_port($host, $port)
    {
        if($host == '' || $port == ''){
            echo $this->theme->error('data_notfound');
            exit;
        }
        $json = $this->host->check_port($host, $port);
        echo '<div class="col">
        <div class="border-app">
        <table class="table table-content">
        <tr>
        <td class="label-td">Host :</td>
        <td><span class="badge text-bg-secondary">' . $json['host'] . '</span></td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td>Port :</td>
        <td><span class="badge text-bg-secondary">' . $json['port'] . '</span></td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td>Port Service :</td>
        <td>' . json_decode($json['port_info'])->description . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td>Status :</td>';
            if ($json['port_status'] == 'open') {
                echo '<td><span class="badge text-bg-success">Port is ' . $json['port_status'] . '</span></td>';
            } else {
                echo '<td><span class="badge text-bg-danger">Port is ' . $json['port_status'] . '</span></td>';
            }
            echo '<td></td></tr>
        </table>
        </div>
        </div>
        <script>$(document).ready(function(){function copyToClipboard(textToCopy){var tempTextarea = $(\'<textarea>\');$(\'body\').append(tempTextarea);tempTextarea.val(textToCopy).select();document.execCommand(\'copy\');tempTextarea.remove();}$("button[class^=\'btn btn-light btn-action copy-clipboard\']").on(\'click\', function(){var char_elem = $(this).parent().parent().children(\'td\').eq(1);var textToCopy = $(char_elem).text();copyToClipboard(textToCopy);});});</script>';
    }

    public function check_whois($domain)
    {
        if($domain == ''){
            echo $this->theme->error('data_notfound');
            exit;
        }
        $json = $this->host->check_whois($domain);
        echo '<div class="col">
        <div class="row">
        <div class="col">
        <div class="border-app">
        <div class="card card-app">
        <div class="card-header">
        <i class="bi bi-globe"></i> Domain information
        </div>
        <div class="card-body" style="padding: 0px;">
        <table class="table table-content" style="padding: 0px;margin:0px;">
        <tr>
        <td class="label-td">Domain :</td>
        <td>' . $json['verisign']['Domain Name'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Registrar :</td>
        <td>' . $json['whois']['Organization'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Registered On :</td>
        <td>' . $json['verisign']['Creation Date'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Expires On :</td>
        <td>' . $json['verisign']['Registry Expiry Date'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Updated On :</td>
        <td>' . $json['whois']['Updated Regristrant'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>';
            $array_status = explode("\n", $json['verisign']['Domain Status']);
            for ($i = 0; $i < sizeof($array_status) - 1; $i++) {
                echo '<tr>';
                if ($i == 0) {
                    echo '<td class="label-td">Status :</td>';
                } else {
                    echo '<td class="label-td"></td>';
                }
                echo '<td>' . $array_status[$i] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>';
            }
            $array_nameserver = explode("\n", $json['verisign']['Name Server']);
            for ($i = 0; $i < sizeof($array_nameserver) - 1; $i++) {
                echo '<tr>';
                if ($i == 0) {
                    echo '<td class="label-td">Name Servers :</td>';
                } else {
                    echo '<td class="label-td"></td>';
                }
                echo '<td>' . $array_nameserver[$i] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>';
            }
            echo '
        </table>
        </div>
        </div>          
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col">
        <div class="border-app">
        <div class="card card-app">
        <div class="card-header">
        <i class="bi bi-person-lines-fill"></i> Regristrant Contact
        </div>
        <div class="card-body" style="padding: 0px;">
        <table class="table table-content" style="padding: 0px;margin:0px;">
        <tr>
        <td class="label-td">Organization :</td>
        <td>' . $json['whois']['OrgName'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">State :</td>
        <td>' . $json['whois']['StateProv'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Country :</td>
        <td>' . $json['whois']['Country'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Email :</td>
        <td>' . $json['whois']['OrgTechEmail'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        </table>
        </div>
        </div>          
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col">
        <div class="border-app">
        <div class="card card-app">
        <div class="card-header">
        <i class="bi bi-person-lines-fill"></i> Administrative Contact
        </div>
        <div class="card-body" style="padding: 0px;">
        <table class="table table-content" style="padding: 0px;margin:0px;">
        <tr>
        <td class="label-td">Organization :</td>
        <td>' . $json['whois']['OrgAbuseHandle'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">State :</td>
        <td>' . $json['whois']['StateProv'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Country :</td>
        <td>' . $json['whois']['Country'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Email :</td>
        <td>' . $json['whois']['OrgTechEmail'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        </table>
        </div>
        </div>          
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col">
        <div class="border-app">
        <div class="card card-app">
        <div class="card-header">
        <i class="bi bi-person-fill-gear"></i> Technical Contact
        </div>
        <div class="card-body" style="padding: 0px;">
        <table class="table table-content" style="padding: 0px;margin:0px;">
        <tr>
        <td class="label-td">Organization :</td>
        <td>' . $json['whois']['OrgTechName'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">State :</td>
        <td>' . $json['whois']['StateProv'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Country :</td>
        <td>' . $json['whois']['Country'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Email :</td>
        <td>' . $json['whois']['OrgTechEmail'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        </table>
        </div>
        </div>          
        </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col">
        <div class="border-app">
        <div class="card card-app">
        <div class="card-header">
        <i class="bi bi-card-text"></i> Raw Whois Data
        </div>
        <div class="card-body" style="padding: 0px;">
        <textarea class="form-control input-data" type="text" readonly style="height: 1300px;max-height: 1300px;background-color: #010d30; color: white;font-size: 13px;">' . $json['verisign_raw'] . '</textarea>
        </div>
        </div>          
        </div>
        </div>
        </div>
        </div>
        <script>$(document).ready(function(){function copyToClipboard(textToCopy){var tempTextarea = $(\'<textarea>\');$(\'body\').append(tempTextarea);tempTextarea.val(textToCopy).select();document.execCommand(\'copy\');tempTextarea.remove();}$("button[class^=\'btn btn-light btn-action copy-clipboard\']").on(\'click\', function(){var char_elem = $(this).parent().parent().children(\'td\').eq(1);var textToCopy = $(char_elem).text();copyToClipboard(textToCopy);});});</script>';
    }

    public function check_useragent()
    {
        $json =  $this->useragent->check_useragent();
        echo '<div class="row">
        <div class="col">
        <div class="border-app">
        <table class="table table-content">
            <tr>
                <td class="label-td">My UserAgent :</td>
                <td>' . $_SERVER['HTTP_USER_AGENT'] . '</td>
                <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
            </tr>
        </table>
        </div>
        </div>
        </div>';
        //echo '<br><br>';
        echo '<div class="row">
        <div class="col">
        <div class="border-app">
        <table class="table table-content">
        <tr>
        <td class="label-td">Browser Name :</td>';
            switch ($json['browser']['name']) {
                case 'Chrome':
                    echo '<td><i class="bi bi-browser-chrome"></i> ' . $json['browser']['name'] . '</td>';
                    break;
                case 'Firefox':
                    echo '<td><i class="bi bi-browser-firefox"></i> ' . $json['browser']['name'] . '</td>';
                    break;
                case 'Edge':
                    echo '<td><i class="bi bi-browser-edge"></i> ' . $json['browser']['name'] . '</td>';
                    break;
                case 'Safari':
                    echo '<td><i class="bi bi-browser-safari"></i> ' . $json['browser']['name'] . '</td>';
                    break;
                default:
                    echo '<td><i class="bi bi-browser-safari"></i> ' . $json['browser']['name'] . '</td>';
                    break;
            }
            echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Browser Version :</td>
        <td>' . $json['browser']['version']['value'] . '</td>
        <td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Browser OS :</td>';
            switch ($json['os']['name']) {
                case 'Windows':
                    echo '<td><i class="bi bi-windows"></i> ' . $json['os']['name'] . ' ' . $json['os']['version']['value'] . '</td>';
                    break;
                case 'Linux':
                    echo '<td><i class="bi bi-ubuntu"></i> ' . $json['os']['name'] . ' ' . $json['os']['version']['value'] . '</td>';
                    break;
                case 'Mac':
                    echo '<td><i class="bi bi-apple"></i> ' . $json['os']['name'] . ' ' . $json['os']['version']['value'] . '</td>';
                    break;
                case 'Android':
                    echo '<td><i class="bi bi-android"></i> ' . $json['os']['name'] . ' ' . $json['os']['version']['value'] . '</td>';
                    break;
                default:
                    echo '<td><i class="bi bi-windows"></i> ' . $json['os']['name'] . ' ' . $json['os']['version']['value'] . '</td>';
                    break;
            }
            echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        <tr>
        <td class="label-td">Platform :</td>';
            switch ($json['device']['type']) {
                case 'desktop':
                    echo '<td><i class="bi bi-window-desktop"></i> ' . $json['device']['type'] . '</td>';
                    break;
                case 'mobile':
                    echo '<td><i class="bi bi-android2"></i> ' . $json['device']['type'] . '</td>';
                    break;
                case 'android':
                    echo '<td><i class="bi bi-android2"></i> ' . $json['device']['type'] . '</td>';
                    break;
                case 'tablet':
                    echo '<td><i class="bi bi-tablet"></i> ' . $json['device']['type'] . '</td>';
                    break;
                default:
                    echo '<td><i class="bi bi-window-desktop"></i> ' . $json['device']['type'] . '</td>';
                    break;
            }
            echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>
        </tr>
        </table>
        </div>
        </div>
        </div>';
    }

    public function check_dns_lookup($domain, $resolver, $dns_type)
    {
        if($domain == '' || $resolver == '' || $dns_type == ''){
            echo $this->theme->error('data_notfound');
            exit;
        }
        $json = $this->host->dig($domain, $resolver, $dns_type);
        if (sizeof($json) <= 0) {
            echo $this->theme->error('data_notfound');
            exit;
        } else {
            echo '<div class="col">';
            switch (strtoupper($dns_type)) {
                case "ALL":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        switch ($array['type']) {
                            case 'A':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">IP Address :</td>';
                                echo '<td>' . $array['ip'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            case 'NS':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Target :</td>';
                                echo '<td>' . $array['target'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            case 'SOA':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Mname :</td>';
                                echo '<td>' . $array['mname'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Rname :</td>';
                                echo '<td>' . $array['rname'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Serial :</td>';
                                echo '<td>' . $array['serial'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Refresh :</td>';
                                echo '<td>' . $array['refresh'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Retry :</td>';
                                echo '<td>' . $array['retry'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Expire :</td>';
                                echo '<td>' . $array['expire'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Minimum TTL :</td>';
                                echo '<td>' . $array['minimum-ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            case 'MX':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Priority :</td>';
                                echo '<td>' . $array['pri'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Target :</td>';
                                echo '<td>' . $array['target'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            case 'TXT':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TXT :</td>';
                                echo '<td>' . $array['txt'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Entries :</td>';
                                foreach ($array['entries'] as $d) {
                                    echo '<td><li>' . $d . '</li></td>';
                                }
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            case 'AAAA':
                                echo '<tr>';
                                echo '<td class="label-td">Host :</td>';
                                echo '<td>' . $array['host'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">TTL :</td>';
                                echo '<td>' . $array['ttl'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">Type :</td>';
                                echo '<td>' . $array['type'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td class="label-td">IPv6 Address :</td>';
                                echo '<td>' . $array['ipv6'] . '</td>';
                                echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                                echo '</tr>';
                                break;
                            default:
                                break;
                        }
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "A":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">IP Address :</td>';
                        echo '<td>' . $array['ip'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "AAAA":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">IPv6 Address :</td>';
                        echo '<td>' . $array['ipv6'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "CNAME":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Target :</td>';
                        echo '<td>' . $array['target'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "MX":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Priority :</td>';
                        echo '<td>' . $array['pri'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Target :</td>';
                        echo '<td>' . $array['target'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "NS":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Target :</td>';
                        echo '<td>' . $array['target'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "PTR":
                    var_dump($json);
                    break;
                case "SRV":
                    var_dump($json);
                    break;
                case "SOA":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Mname :</td>';
                        echo '<td>' . $array['mname'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Rname :</td>';
                        echo '<td>' . $array['rname'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Serial :</td>';
                        echo '<td>' . $array['serial'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Refresh :</td>';
                        echo '<td>' . $array['refresh'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Retry :</td>';
                        echo '<td>' . $array['retry'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Expire :</td>';
                        echo '<td>' . $array['expire'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Minimum TTL :</td>';
                        echo '<td>' . $array['minimum-ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "TXT":
                    echo '<div class="row"><div class="col">';
                    foreach ($json as $array) {
                        echo '<div class="border-app"><table class="table table-content">';
                        echo '<tr>';
                        echo '<td class="label-td">Host :</td>';
                        echo '<td>' . $array['host'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TTL :</td>';
                        echo '<td>' . $array['ttl'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Type :</td>';
                        echo '<td>' . $array['type'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">TXT :</td>';
                        echo '<td>' . $array['txt'] . '</td>';
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td class="label-td">Entries :</td>';
                        foreach ($array['entries'] as $d) {
                            echo '<td><li>' . $d . '</li></td>';
                        }
                        echo '<td class="label-td-small"><button class="btn btn-light btn-action copy-clipboard"><i class="bi bi-copy"></i></button></td>';
                        echo '</tr>';
                        echo '</table></div>';
                    }
                    echo '</div></div>';
                    break;
                case "CAA":
                    var_dump($json);
                    break;
                case "DS":
                    var_dump($json);
                    break;
                case "DNSKEY":
                    var_dump($json);
                    break;
                default:
                    break;
            }
            echo '</div>';
            echo '<script>$(document).ready(function(){function copyToClipboard(textToCopy){var tempTextarea = $(\'<textarea>\');$(\'body\').append(tempTextarea);tempTextarea.val(textToCopy).select();document.execCommand(\'copy\');tempTextarea.remove();}$("button[class^=\'btn btn-light btn-action copy-clipboard\']").on(\'click\', function(){var char_elem = $(this).parent().parent().children(\'td\').eq(1);var textToCopy = $(char_elem).text();copyToClipboard(textToCopy);});});</script>';
        }
    }

    public function check_ping($host){
        if($host == ''){
            echo $this->theme->error('data_notfound');
            exit;
        }
        $json = $this->host->ping($host);
        echo '';
    }

    public function add_account($type, $name, $email, $password, $apikey)
    {
    }

    function __destruct()
    {
        //echo '<script type="text/javascript" src="../js/main/all.js"></script>';
    }

}
