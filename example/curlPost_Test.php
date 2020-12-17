<?php

use zcl\Curl\Method\Post\CurlPost;

require_once dirname(__DIR__) . '/src/Interfaces/CurlInterface.php';

require_once dirname(__DIR__) . '/src/Traits/CurlUserAgentTrait.php';
require_once dirname(__DIR__) . '/src/Traits/UserAgentTrait.php';
require_once dirname(__DIR__) . '/src/Traits/CurlRefererTrait.php';
require_once dirname(__DIR__) . '/src/Traits/RefererTrait.php';

require_once dirname(__DIR__) . '/src/Curl.php';
require_once dirname(__DIR__) . '/src/Method/Post/CurlPost.php';

require_once dirname(__FILE__) . '/requestData.php';
global $RequestURL, $SendData;

$curlGet = new CurlPost($RequestURL, $SendData);

echo $curlGet->getErrorResult();
echo $curlGet->getCurlResponse();
//echo json_encode($curlGet->getCurlResponse());
