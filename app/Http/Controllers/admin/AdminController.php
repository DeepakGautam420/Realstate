<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function PaymentList(){
        return view('admin.payment.payment');
    }
    
}
