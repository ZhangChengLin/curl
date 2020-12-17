<?php


namespace zcl\Curl\Traits;


use Curl\Curl;

trait CurlRefererTrait
{
    /**
     * @param Curl $curlVariable
     * @param string $referer
     */
    public function setCurlReferer(Curl $curlVariable, string $referer)
    {
        $curlVariable->setReferrer($referer);
    }
}
