<?php


namespace zcl\Curl\Traits;


use Curl\Curl;

trait CurlUserAgentTrait
{
    /**
     * @param Curl $curlVariable
     * @param string $userAgent
     */
    public function setCurlUserAgent(Curl $curlVariable, string $userAgent)
    {
        $curlVariable->setUserAgent($userAgent);
    }
}
