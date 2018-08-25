@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            @foreach($discussions as $item)
            <div class="card mt-2">
                <div class="card-header">
                    <img src="{{asset($item->user->avatar)}}" alt=""> {{$item->user->name}} {{$item->created_at->diffforhumans()
                    }}
                    <span class="float-right">
                        <a href="{{route('discuss.view',['id'=> $item->id])}}" class="btn btn-default">View</a>
                    </span>
                </div>

                <div class="card-body text-center">
                    <h4> {{$item->title}} </h4>
                    {{ str_limit($item->content,50) }}
                </div>
                <div class="card-footer">
                    {{ $item->replies->count() }} reply
                </div>


            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection