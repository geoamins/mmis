<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    function __construct()
    {
        
        $lng = session()->get('locale');
        App::setLocale('ur');

    }
}
