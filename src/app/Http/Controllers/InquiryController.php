<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use App\Models\Contact;
use App\Models\Category;

class InquiryController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function confirm(InquiryRequest $request){
        $tel = $request->input('tel1').'-'.$request->input('tel2').'-'.$request->input('tel3');
        $contact = $request->only(['last_name','first_name','gender','email','address','building','detail','content']);
        $request->flash();
        $contact['tel'] = $tel;
        return view('confirm',['contact'=>$contact]);
    }
    public function thanks(InquiryRequest $request){
        $tel = $request->input('tel1').'-'.$request->input('tel2').'-'.$request->input('tel3');
        $contact = $request->only(['last_name','first_name','gender','email','address','building','detail','content',]);
        $contact['tel'] = $tel;
        Contact::create($contact);
        return view('thanks');
    }
}
