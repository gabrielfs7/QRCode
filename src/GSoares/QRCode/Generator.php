<?php
namespace GSoares\QRCode;

use \InvalidArgumentException;

/**
 *
 * @author Gabriel Felipe Soares <gabrielfs7@gmail.com>
 */
abstract class Generator implements Encoder
{
    /**
     * @var string
     */
    const API_URL = 'https://chart.googleapis.com/chart?';
    
    /**
     * @var string
     */
    protected $params;
    
    /**
     * Generate the QR code image
     *
     * @param int $size
     * @param string $fileName
     */
    public function draw($size = 150, $fileName = null)
    {
        $ext = 'png';
        
        $image = file_get_contents(
            self::API_CHART_URL . 'chs=' . $size . 'x' . $size . 
            '&cht=qr&chl=' . urlencode($this->params)
        );
        
        if ($fileName) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            
            $this->validateExtension($ext);
    
            return file_put_contents($fileName, $image);
        }
        
        $this->output($image, $ext);
    }
    
    /**
     * @param string $image
     * @param string $fileName
     */
    public function output($image, $ext)
    {
        $ext = $ext == 'jpg' ? 'jpeg' : $ext;
        
        header("Content-type: image/" . $ext);
        print $image;
    }
    
    /**
     * @param striing $ext
     * @throws InvalidArgumentException
     */
    protected function validateExtension($ext)
    {
        $exts = array('jpg', 'jpeg', 'png', 'gif');
        
        if (!in_array($ext, $exts)) {
            throw new InvalidArgumentException(
            	'Only the file extensions: ' . implode(',', $exts) . 
                ' are allowed'        
            );
        }
    }
}