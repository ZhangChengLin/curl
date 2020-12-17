<?php

use zcl\Curl\Curl as CurlAlias;

require_once dirname(__DIR__) . '/vendor/autoload.php';

require_once dirname(__DIR__) . '/src/Interfaces/CurlInterface.php';

require_once dirname(__DIR__) . '/src/Traits/CurlUserAgentTrait.php';
require_once dirname(__DIR__) . '/src/Traits/UserAgentTrait.php';
require_once dirname(__DIR__) . '/src/Traits/CurlRefererTrait.php';
require_once dirname(__DIR__) . '/src/Traits/RefererTrait.php';

require_once dirname(__DIR__) . '/src/Curl.php';

require_once dirname(__FILE__) . '/requestData.php';
global $RequestURL, $SendData;

class Curl extends CurlAlias
{
    public function __construct(string $RequestURL = '', array $SendData = array(), string $RequestMethod = null)
    {
        parent::__construct($RequestURL, $SendData, $RequestMethod);
    }
}

$curlGet = new Curl($RequestURL, $SendData, 'get');
//$curlGet = new Curl($RequestURL, $SendData, 'post');

echo $curlGet->getErrorResult();
echo $curlGet->getCurlResponse();
//echo json_encode($curlGet->getCurlResponse());
