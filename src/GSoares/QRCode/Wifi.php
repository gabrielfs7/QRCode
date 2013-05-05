<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class Wifi extends Generator
{
    /*
     * (non-PHPdoc) @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($type, $id, $password)
    {
        $this->params = 'WIFI:T:' . $type . ';S' . $id . ';' . $password .';';
    }
}