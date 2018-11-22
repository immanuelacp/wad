@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Booking Villa</h1>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                Address
                <input type="text" name="address" class="form-control">
                Photo
                <input type="file" name="photo" class="form-control">
                Price
                <input type="number" name="price" class="form-control">
                Desc
                <textarea name="desc" class="form-control"></textarea>
                <br>
                <button type="submit" class="btn btn-warning">SAVE</button>
            </form>

        </div>
    </div>


@endsection