@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit Villa</h1>
        </div>
        <div class="card-body">
            <div class="col-md-8">
                @if(session('status'))
                    <div class="alert alert-warning">
                        {{session('status')}}
                    </div>
                @endif
                <form enctype="multipart/form-data" class="bg-white p-3"
                      action="{{route('villa.update', ['id'=> $villa->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    Name
                    <input type="text" name="name" class="form-control" value="{{$villa->name}}">
                    Address
                    <input type="text" name="address" class="form-control" value="{{$villa->address}}">
                    @if($villa->photo)
                        <span>Photo</span>
                        <br><br>
                        <img src="{{asset('storage/'.$villa->photo)}}" width="120px">
                        <br><br>
                    @endif

                    <input type="file" name="photo" class="form-control" value="{{$villa->photo}}">
                    Price
                    <input type="number" name="price" class="form-control" value="{{$villa->price}}">
                    Desc
                    <textarea name="desc" class="form-control" value="{{$villa->desc}}"></textarea>

                    <br>
                    <input type="submit" class="btn btn-warning" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection