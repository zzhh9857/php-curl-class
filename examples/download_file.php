<?php
require '../src/Curl/Curl.php';

use \ZzhhCurl\Curl;

$curl = new Curl();
$curl->download('https://php.net/images/logos/php-med-trans.png', '/tmp/php-med-trans.png');
