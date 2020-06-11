<?php namespace Codielabs;

use Codielabs\Config\Minify;

class Minify
{

    protected $config;
    
    public function __construct()
    {
        parent::__construct();

        $this->config = new Minify();
    }    

    public function start()
    {
        return $this->config;
    }

}
