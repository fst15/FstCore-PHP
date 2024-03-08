<?php
require_once($basedir.'/include/lib/datacore/Datacore.php');
require_once($basedir.'/include/lib/payment/Payment.php');
require_once($basedir.'/include/lib/util/Util.php');

class Lib{

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

  function __construct(){
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
  }

  public function ip_info($host){
    return $this->host->check_isp($host);
  }

  public function check_port($host, $port){
    return $this->host->check_port($host, $port);
  }

  public function check_whois($domain){
    return $this->host->check_whois($domain);
  }

  public function check_useragent(){
    return $this->useragent->check_useragent();
  }

  public function check_dns_lookup($domain, $resolver, $dns_type){
      return $this->host->dig($domain, $resolver, $dns_type);
  }

  public function check_ping($host){
    //return $this->host->ping($host);
  }
  
  function __destruct(){
    
  }

}

?>
