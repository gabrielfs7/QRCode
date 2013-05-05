<?php
namespace GSoares\QRCode;

/**
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
interface Encoder
{
    public function encode();
    
    public function draw();
}