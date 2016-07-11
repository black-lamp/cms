<?php
namespace backend\components\imagable;
use bl\imagable\name\BaseName;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */

class CRC32Name extends BaseName
{

    public function generate($baseName)
    {
        return uniqid(hash('crc32', $baseName));
    }

}