<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function submit() {
        Mail::send(['text' => 'mail'], ['name', 'Web Tco'], function ($message) {
            $message->to('gevavetikyan39@gmail.com', 'To Tco')->subject('test mail');
            $message->from('gevavetikyan39@gmail.com', 'Tco');
        });
    }
}
