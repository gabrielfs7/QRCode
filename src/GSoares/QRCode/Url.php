<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class Url extends Generator
{
    /*
     * (non-PHPdoc) @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($url)
    {
        $this->params = preg_match('^https?\:\/\//', $url) ? $url : 'http://' . $url;
    }
}