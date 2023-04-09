<?php 

$server = "localhost";
$username = "root";
$password = "linkers";
$database = "psa_management";

$__name__ = "psa-develop";



$con = mysqli_connect($server,$username,$password,$database);


function getMyUrl()
{
  $protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
  $server = $_SERVER['SERVER_NAME'];
  $port = $_SERVER['SERVER_PORT'] ? ':'.$_SERVER['SERVER_PORT'] : '';
  return $protocol.$server.$port;
}

 define('URL_RESUME', getMyUrl().'/psa-develop/resume/'  );
?>