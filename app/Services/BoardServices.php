<?php

namespace App\Services;

class BoardServices
{
    /**
     * Create a new class instance.
     */
    protected $name;
    
    public function __construct()
    {
        $this->name = "First Diuty";
    }

    public function get()
    {
        return $this->name;
    }
}
