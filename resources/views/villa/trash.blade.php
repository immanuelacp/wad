@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Villa</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('villa.trash')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Filter by Villa name" value="{{Request::get('name')}}"
                                   name="name">
                            <div class="input-group-append">
                                <input type="submit" value="Filter" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="{{route('villa.index')}}">Published</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning active" href="{{route('villa.trash')}}">Trash</a>
                    </li>
                </ul>
            </div>
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
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><b>Name</b></th>
                            <th><b>Actions</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($villas as $villa)
                            <tr>
                                <td>{{$villa->name}}</td>
                                <td>
                                    <a href="{{route('villa.restore', ['id'=> $villa->id])}}" class="btn btn-success btn-sm">Restore</a>
                                    <form class="d-inline" action="{{route('villa.delete-permanent',['id'=> $villa->id])}}" method="POST"
                                          onsubmit="return confirm('Delete this villa permanently?')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="10">
                                {{$villas->appends(Request::all())->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection