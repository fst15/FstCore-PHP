<?php

class scripts{

    function __construct(){

    }

    public function init()
    {
      echo '<!--popperjs-->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.js" integrity="sha384-yBknSWNrSUPkBtbhhCJ07i/BOmbrigRhLKPzTAny+TT4uGAwIdfNTAkBd/3VzXbg" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
  
          <!--bootstrap-->
          <script type="text/javascript" src="../js/bootstrap/bootstrap.bundle.min.js"></script>
          <!--<script type="text/javascript" src="../js/bootstrap/bootstrap.js"></script>
          <script type="text/javascript" src="../js/bootstrap/bootstrap.min.js"></script>
          <script type="text/javascript" src="../js/bootstrap/bootstrap.bundle.js"></script>-->
  
          <!--jQuery 3.7.1-->
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
          <script type="text/javascript" src="../js/intltelinput/intlTelInput.js"></script>
  
          <!-- TinyMCE library -->
          <script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
  
          <script type="text/javascript" src="../assets/js/color-modes.js"></script>
          <script type="text/javascript" src="../js/dashboard/dashboard.js"></script>
          <script type="text/javascript" src="../js/main/all.js"></script>';
    }

    function __destruct(){

    }

}

?>