@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Update Channel Info</div>

        <div class="card-body">
          <form action="{{route('channel.update',['channel'=>$channel->id])}}" method="POST">
            @csrf {{ method_field('PUT') }}
            <div class="form-group">
              <label for="title">title</label>
              <input type="text" name="title" value="{{$channel->title}}" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-block btn-success" value="Update">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection