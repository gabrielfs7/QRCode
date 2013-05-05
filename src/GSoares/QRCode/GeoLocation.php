<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class GeoLocation extends Generator
{
    /*
     * (non-PHPdoc) @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($latitude, $longitude, $height)
    {
        $this->params = 'GEO:' . $latitude . ',' . $longitude . ',' . $height;
    }
}