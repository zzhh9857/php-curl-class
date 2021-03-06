<?php
require '../src/Curl/Curl.php';
require '../src/Curl/MultiCurl.php';

use \ZzhhCurl\Curl;
use \ZzhhCurl\MultiCurl;

$multi_curl = new MultiCurl();
$multi_curl->addDownload('https://php.net/images/logos/php-med-trans.png', '/tmp/php-med-trans.png');
$multi_curl->addDownload('https://upload.wikimedia.org/wikipedia/commons/c/c1/PHP_Logo.png', '/tmp/PHP_Logo.png');
$multi_curl->start();
