<?php namespace Codielabs;

use Codielabs\Config\Minify as Config;

class Minify
{

    protected $config;
    
    public function __construct()
    {
        $this->config = new Config();
    }    

    public function start()
    {
        return $this->config;
    }

}
