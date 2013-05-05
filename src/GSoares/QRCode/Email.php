<?php
namespace GSoares\QRCode;

use GSoares\QRCode\Generator;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
class Email extends Generator
{
    /*
     * (non-PHPdoc) @see \GSoares\QRCode\Encoder::encode()
     */
    public function encode($email, $subject, $message)
    {
        $this->params = 'MATMSG:TO:' . $email. ';SUB:' . $subject. ';BODY:' . $message. ';;';
    }
}