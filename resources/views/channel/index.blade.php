@extends('layouts.app') 
@section('content')
<div class="">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Channels</div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($channels as $item)
              <tr>
                <td> {{$item->title}} </td>
                <td>
                  <a href="{{route('channel.edit',['channel'=>$item->id])}}" class="btn btn-info">Edit</a>
                  <form action="{{route('channel.destroy',['channel'=> $item->id])}}" method="POST">
                    @csrf {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection