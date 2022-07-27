<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function testRenderText()
    {
        return 'testRenderText!';
    }
}
