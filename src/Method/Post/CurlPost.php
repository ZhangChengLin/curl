<?php

namespace zcl\Curl\Method\Post;

use zcl\Curl\Curl;

class CurlPost extends Curl
{
    public function __construct(string $RequestURL = '', array $SendData = array())
    {
        parent::__construct();

        self::setReferer('HTTP_REFERER');
        self::setCurlReferer(parent::getCurl(), self::getReferer());
        self::setUserAgent($_SERVER['HTTP_USER_AGENT']);
        self::setCurlUserAgent(parent::getCurl(), self::getUserAgent());
        parent::post($RequestURL, $SendData);
        parent::setErrorResult(parent::getCurl()->error);
        parent::setCurlResponse(parent::getCurl()->response);
    }
}
