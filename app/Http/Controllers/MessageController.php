<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'msg_content' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $comment = new Comment();

        $comment->content = $request->input('msg_content');
        $comment->user_id = $request->input('user_id');
        $comment->news_id = $request->input('news_id');

        $comment->save();

        return redirect()->back();
    }
}
