<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellPropertyController extends Controller
{
    //
    public function sellProperty()
    {
        return view('frontend.sellProperty');
    }
}
