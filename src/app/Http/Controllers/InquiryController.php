<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    // public function admin(){
    //     return view('admin');
    // }
    public function contact(){
        return view('contact');
    }
    public function confirm(InquiryRequest $request){
        $tel = $request->input('tel1').'-'.$request->input('tel2').'-'.$request->input('tel3');
        $contact = $request->only(['last_name','first_name','gender','email','address','building','detail','content']);
        $contact['tel'] = $tel;
        return view('confirm',['contact'=>$contact]);
    }
}