<?php

// Sanitizing getter
function funcHTTPGetValue($_value) {
  if (!isset($_GET[$_value]) || $_GET[$_value] === '' || $_GET[$_value] === null || empty($_GET[$_value])) {
    return null;
  } else {    
    $_finalValue = preg_replace('/[^-a-zA-Z0-9_\.]/', '', $_GET[$_value]);
    return $_finalValue;
  }
}

// Sends the standard headers
function funcSendHeader($_value) {
  $_arrayHeaders = array(
    '404' => 'HTTP/1.0 404 Not Found',
    '501' => 'HTTP/1.0 501 Not Implemented',
    'html' => 'Content-Type: text/html',
    'text' => 'Content-Type: text/plain',
    'xml' => 'Content-Type: text/xml',
    'css' => 'Content-Type: text/css',
    'json' => 'Content-Type: application/json',
  );
    
  if (array_key_exists($_value, $_arrayHeaders)) {
    header($_arrayHeaders[$_value]);
        
    if ($_value == '404') {
      // We are done here
      exit();
    }
  }
}

// Sends a redirect header to the supplied url
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

// startsWith and endsWith polyfills
function startsWith($haystack, $needle) {
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr($haystack, -$length) === $needle);
}

// ****************** MAIN **********************

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? null;

if (!$userAgent ||
    startsWith(strtolower($userAgent), 'wget/') ||
    startsWith(strtolower($userAgent), 'curl/')) {
    funcSendHeader('404');
}

$version = '28.9.0';

$app = funcHTTPGetValue('app');
$version = funcHTTPGetValue('version');
$channel = funcHTTPGetValue('channel');

if (!$app || !$version || !$channel)
  die('Incorrect use.');

switch($app) {
  case "palemoon":
    redirect('pm-' . $channel . '.json', 302);
    break;
  default:
    redirect('empty.json');
}

?>
