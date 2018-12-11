<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Html as MailHtml;
use App\Mail\Markdown as MailMarkdown;
use App\Mail\Text as MailText;
use Mail;
use App\Models\User;

class MailController extends Controller
{
    /**
     * Send mail with html format.
     *
     * @return \Illuminate\Http\Response
     */
    public function mailFormatHtml()
    {
        $user = User::first();
        Mail::to('minhbkpro@gmail.com')->send(new MailHtml($user));
    }
}
