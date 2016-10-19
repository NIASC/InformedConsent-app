<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<html>
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript">
  function resultSubmitFunction(a) {
    $.post('receive.php',{'result': a}, function(data) {
      if(a.error != true) {
        $('#pid').val(data.Pid);
        // console.log(a);
        window.close();
      }

      else {
        $('#pid').val("");
        window.close();
      }
    });


  }
</script>

<?php
/*
* Copyright (c) 2016, Signaturgruppen  <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/
use Signaturgruppen\SPS\Demo\Configuration;

require_once 'vendor/autoload.php';

//Config
Configuration::loadConfig();

$nemid = new \Signaturgruppen\SPS\Frame\NemIDFrameBuilder();


echo $nemid->buildScript("receive.php");

?>
<input type="hidden" name="pid" id="pid" value="">
<iframe src="<?php echo $nemid->getFrameUrl() ?>" scrolling="no"
        style="position:relative; width: 200px; height: 250px; border: none; margin: 0; padding: 0;"></iframe>

</body>
</html>
