@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 ">

      <div class="card mt-2">
        <div class="card-header">
          <img src="{{asset($discussion->user->avatar)}}" alt=""> {{$discussion->user->name}} {{$discussion->created_at->diffforhumans()
          }}
          <span class="float-right">
                        <a href="{{$discussion->id}}" class="btn btn-default">View</a>
                    </span>
        </div>

        <div class="card-body text-center">
          <h4> {{$discussion->title}} </h4>
          {{ $discussion->content }}
        </div>
        <div class="card-footer">
          {{ $discussion->replies->count() }} reply
        </div>


      </div>

      @foreach($discussion->replies as $item)
      <div class="card mt-2">
        <div class="card-header">
          <img src="{{asset($item->user->avatar)}}" alt=""> {{$item->user->name}} {{$item->created_at->diffforhumans() }}

        </div>

        <div class="card-body text-center">

          {{ str_limit($item->content,50) }}
        </div>
        <div class="card-footer">

          @if($item->is_liked_by_user())
          <a href="{{route('reply.unlike',['id'=> $item->id])}}" class="btn btn-danger">Unlike</a> @else
          <a href="{{route('reply.like',['id'=> $item->id])}}" class="btn btn-success">Like</a> @endif



        </div>


      </div>
      @endforeach


      <div class="card mt-2">

        <div class="card-body text-center">

          <form action="{{route('discussion.reply',['id'=>$discussion->id]) }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Leave a reply</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success float-right" value="Reply">
            </div>
          </form>

        </div>

      </div>



    </div>

  </div>
</div>
@endsection