<?php
require '../src/Curl/Curl.php';
require '../src/Curl/MultiCurl.php';

use \ZzhhCurl\Curl;
use \ZzhhCurl\MultiCurl;

$callback = function($instance, $tmpfile) {
    $save_to_path = '/tmp/' . basename($instance->url);
    $fh = fopen($save_to_path, 'wb');
    stream_copy_to_stream($tmpfile, $fh);
    fclose($fh);
};

$multi_curl = new MultiCurl();
$multi_curl->addDownload('https://php.net/images/logos/php-med-trans.png', $callback);
$multi_curl->addDownload('https://upload.wikimedia.org/wikipedia/commons/c/c1/PHP_Logo.png', $callback);
$multi_curl->start();
