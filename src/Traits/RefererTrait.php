<?php


namespace zcl\Curl\Traits;


trait RefererTrait
{
    public string $Referer;

    public function setReferer(string $referer)
    {
        $this->Referer = $referer;
    }

    public function getReferer(): string
    {
        return $this->Referer;
    }
}
