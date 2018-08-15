@extends('layouts.app') 
@section('content')
<div class="">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Create Channel</div>

        <div class="card-body">
          <form action="{{route('channel.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">title</label>
              <input type="text" name="title" class="form-control">
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