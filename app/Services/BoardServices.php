<?php

namespace App\Services;

use Illuminate\Http\Request;

class BoardServices
{
    /**
     * Create a new class instance.
     */
    protected $requestData;

    public function processRequest(Request $request)
    {
        $requestData = $request->all();
        dd($requestData);
        
        // انجام دیگر عملیات با مقادیر ریکوئست
    }
}
