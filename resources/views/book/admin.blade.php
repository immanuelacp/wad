@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Book List</h1>
    </div>
    <div class="card-body">
        <hr class="my-3">
        @if(session('status'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Villa</th>
                            <th>Price</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($books as $key => $book)
                        @php
                          $day = floor((strtotime($book->end_date) - strtotime($book->start_date)) / (60 * 60 * 24))
                        @endphp
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$book->User->name}}</td>
                          <td>{{$book->Villa->name}}</td>
                          <td>Rp. {{$book->Villa->price * $day}}</td>
                          <td>{{$book->start_date}}</td>
                          <td>{{$book->end_date}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
