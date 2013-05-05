<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class Bookmark extends Generator
{
    /* (non-PHPdoc)
     * @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($title, $url)
    {
        $this->params = 'MEBKM:TITLE:' . $title . ';URL:' . $url .';';
    }
}