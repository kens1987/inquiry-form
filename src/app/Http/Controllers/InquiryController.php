<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function admin(){
        return view('admin');
    }
}