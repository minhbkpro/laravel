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
     * Show input email page for test send mail with html format.
     *
     * @return \Illuminate\Http\Response
     */
    public function mailFormatHtmlShow()
    {
        return view('mail.html');
    }

    /**
     * Send mail with html format.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function mailFormatHtml(Request $request)
    {
        $user = User::first();
        Mail::to($request->email)->send(new MailHtml($user));

        return back()->with('success', 'The mail has been sent successfully!');
    }
}
