<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Services\MailService;

class HomeController extends Controller
{
    protected $mailService;


    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function getIndex(Request $request)
    {
       return  view('welcome');
    }

    public function postIndex(Request $request)
    {
        $formContact=new \stdClass();
        $formContact->name = $request->input('name');
        $formContact->email = $request->input('email');
        $formContact->subject = $request->input('subject');
        $formContact->message = $request->input('message');
        $this->mailService->sendMail($formContact,'emails.contact');
        return  view('welcome', ['mailState' => 'پیام شما ارسال شد.']);
    }

}
