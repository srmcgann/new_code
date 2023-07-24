<?php
  error_reporting(0);
  ini_set('upload_max_filesize', 10000000000);
  ini_set('file_uploads', 1);
  ini_set('max_input_time', 0);
  ini_set('memory_limit', -1);
  ini_set('max_execution_time', "600");
  ini_set('post_max_size', 100000000000);

  $req = ltrim($_SERVER['REQUEST_URI'],'/');
  $_GET['i'] = '';
  if(strlen($req) && !file_exists($req)){
    $_GET['i'] = $req;
  }
  if(strpos('?i=',$_GET['i'])!=false){
    $_GET['i'] = explode('?i=',$_GET['i'])[1];
  }
  $db_user  = 'root';
  $db_pass  = '';
  $db_host  = 'containers-us-west-144.railway.app';
  $db       = "videodemos";
  $port     = '6330';
  $link     = mysqli_connect($db_host,$db_user,$db_pass,$db,$port);
  

  $maxResultsPerPage = 4;
  $demoSandbox='code.whitehot.ninja/sandbox';
  $baseAssetsURL = 'https://assets.whitehot.ninja';
  $baseURL = 'https://code.whitehot.ninja/a';
  $baseFullURL= $baseURL;
?>
