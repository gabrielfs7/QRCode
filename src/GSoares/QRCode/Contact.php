<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class Contact extends Generator
{
    /*
     * (non-PHPdoc) @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($name, $address, $phone, $email)
    {
        $this->params = 'MECARD:N:' . $name . ';ADR:' . $address . ';TEL:' . $phone . ';EMAIL:' . $email . ';';
    }
}