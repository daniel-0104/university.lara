<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //contact home page
    public function contactHomePage(){
        return view('website.dashboard.contact');
    }

    //contact update
    public function contactUpdate(Request $request){
        $this->contactValidationCheck($request);
        $data = $this->getPostData($request);
        Contact::create($data);
        return back()->with(['sendMessage'=>'Your Message Sent Successfully...']);
    }

    //contact post data
    private function getPostData($request){
        return [
            'name' => $request->contactName,
            'telephone' => $request->contactPhone,
            'email' => $request->contactEmail,
            'message' => $request->contactMessage
        ];
    }

    //contact validation check
    private function contactValidationCheck($request){
        Validator::make($request->all(),[
            'contactName' => 'required',
            'contactPhone' => 'required|min:11',
            'contactEmail' => 'required',
            'contactMessage' => 'required'
        ])->validate();
    }
}
