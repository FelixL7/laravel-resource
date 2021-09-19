<?php

namespace FelixL7\Asset\CDNs;

use FelixL7\Asset\Interfaces\ICdn;

class JsDelivr extends AbstractCdn implements ICdn
{
    public const DOMAIN = 'https://cdn.jsdelivr.net';
    public const LIB_PATH = '/npm';

    public function getDomain() : string {
        return self::DOMAIN;
    }

    protected function getLibPath() : string {
        return self::LIB_PATH;
    }

    protected function getFilePathPart($part, $key) {
        switch ($key) {
            case 0:
                return $part;
            case 3:
                return "@{$part}";

            default:
                return "/{$part}";
        }
    }
}
