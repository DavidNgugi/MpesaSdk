<?php


namespace App\Data\Helpers\Sdks;

use Safaricom\Mpesa\Mpesa;

class MpesaSdk
{
    protected $auth_url;
    
    protected $confirmurl;
    
    protected $validateurl;
    
    protected $shortcode;
    
    protected $passkey;
    
    public function __construct($passkey, $confirmurl, $validateurl, $shortcode)
    {
        $this->passkey = "";
    }

}
