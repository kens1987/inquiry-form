<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\RegisterRequest;

class InquiryController extends Controller
{
    // public function admin(){
    //     return view('admin');
    // }
    public function contact(){
        return view('contact');
    }
    public function confirm(Request $request){
        $contact = $request->only(['name','gender','email','tel','address','building','detail','content']);
        return view('confirm',['contact'=>$contact]);
    }
}