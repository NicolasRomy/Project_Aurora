<?php

class Stripe {
    public $headers;
    public $url = 'https://api.stripe.com/v1/';
    public $method = null;
    public $fields = array();
    private $api_key;
    
    function __construct (string $api_key) {
        $this -> api_key = $api_key;
        $this->headers = array('Authorization: Bearer '.$this->api_key); // STRIPE_API_KEY = your stripe api key
    }
    
    function call () {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        switch ($this->method){
            case "POST":
                curl_setopt($ch, CURLOPT_POST, 1);
                if ($this->fields)
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $this->fields);
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($this->fields)
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $this->fields);
                break;
            default:
                if ($this->fields)
                    $this->url = sprintf("%s?%s", $this->url, http_build_query($this->fields));
        }
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output, true); // return php array with api response
    }
}
