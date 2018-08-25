<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use Auth;

class ForumController extends Controller
{
    public function index(){
        $discussions = Discussion::orderBy('created_at','desc')->paginate(3);
        return view('forum',[
            'discussions' => $discussions
        ]);
    }

    public function reply(Request $request){
        $discussion = Discussion::find($request->id);
        $reply = Reply::create([
            'user_id' => Auth::id(),
            'content'   => request()->content,
            'discussion_id' => $discussion->id,
        ]);
    }

}
