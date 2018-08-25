<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Reply;
use Auth;

class ReplyController extends Controller
{
    public function like($id){

        Like::create([
            'user_id' => Auth::id(),
            'reply_id' => $id
        ]);
        return back();
    }

    public function unlike($id){
        $like = Like::where('reply_id',$id)->where('user_id',Auth::id())->first();
         $like->delete();   
        return back();
    }

}
