<?php

namespace App\Http\Controllers\Api\Store\v1\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Questions\AskQuestions;
use Mail;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'user_name'   => 'required|string',
            'user_email' => 'required|email',
            'content' => 'required|string',
        ]);

        $mailData = [
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'content' => $request->content
        ];

        Mail::to('nxwang00@gmail.com')->send(new AskQuestions($mailData));

        return successApiResponse('Your question is successfully submitted to Ana.', [], 200);
    }
}
