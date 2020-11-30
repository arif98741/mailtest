<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Mail;


class ContactController extends Controller
{
    public function store()
    {
        /**
         * come from form
         */
        $name = 'Arif';
        $address = 'Dhaka';
        $mobile = '0175XXXXXXX';
        $details = [
            'title' => 'na' . env('APP_NAME'),
            'body' => 'This is for testing email using smtp',
            'name' => $name,
            'address' => $address,
            'mobile' => $mobile
        ];
        $subject = 'Contact mail';

        $this->sendMail($details, $subject);
    }

    private function sendMail($details, $subject)
    {
        \Mail::to('arifsofg@gmail.com')
            ->send(new TestMail($details, $subject));
        dd("Email is Sent.");
    }
}
