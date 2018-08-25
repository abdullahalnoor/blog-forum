@extends('layouts.app') 
@section('content')




<div class="">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Create Discussion</div>

        <div class="card-body">
          <form action="{{route('discuss.create')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">title</label>
              <select class="form-control" name="channel_id">
                @foreach($channels as $channel)
                  <option value="{{$channel->id}}"> {{ $channel->title }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="title">title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="content">content</label>
              <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-block btn-success" value="Create">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection