<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;
use App\Discussion;
use Auth;

class DiscussionController extends Controller
{
    public function create(){
        $channels = Channel::all();
        return view('discuss.create',compact('channels'));
    }

    public function store(Request $request){
        $discuss = Discussion::create([
            'user_id' => Auth::user()->id,
            'channel_id' => $request->channel_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }

    public function show($id){
        $discussion =Discussion::find($id);
        return view('discuss.index',compact('discussion'));
    }

}
