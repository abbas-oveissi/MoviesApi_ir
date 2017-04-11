<?php

namespace Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Repositories\Movie\MovieInterface;
use Repositories\Genre\GenreInterface;

use \stdClass;
/**
 * Created by IntelliJ IDEA.
 * User: abbas
 * Date: 11/6/16
 * Time: 1:04 AM
 */
class MailService
{

    public function __construct()
    {
    }


    public function sendMail($contactForm,$view )
    {
        DB::beginTransaction();
        try {
            $email=$contactForm->email;
            $subject=$contactForm->subject;


            \Mail::send($view,
                array(
                    'name' => $contactForm->name,
                    'email' => $contactForm->email,
                    'user_message' => $contactForm->message
                ), function($message) use ($email,$subject)
                {
                    $message->from($email,"moviesapi.ir contact form");
                    $message->to('abbas.oveissi@gmail.com', 'Admin')->subject($subject);
                });

        } catch(Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();
    }



}