@extends('master')
@section('content')

    <!-- courses -->

    <section class="wthree-row w3-about  py-5">
        <div class="container py-md-4 mt-md-3">
            <h3 class="heading-agileinfo" style="font-family: 'Comfortaa Light'">The <span>Villa</span></h3>
            <div class="card-deck mt-md-5 pt-5">
                @foreach($villas as $villa)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{asset('storage/'.$villa->photo)}}" class="img-fluid" alt="Card image cap">
                            <div class="card-body w3ls-card">
                                <h5 class="card-title">{{$villa->name}}</h5>
                                <p class="card-text mb-3">{{$villa->address}}</p>
                                <p class="card-text mb-3">Rp. {{$villa->price}}</p>
                                <p class="card-text mb-3">{{$villa->desc}}</p>

                                <div class="ab_button">
                                    <a class="btn btn-primary btn-lg hvr-underline-from-left"
                                       role="button" data-toggle="modal" data-target="#exampleModal{{$villa->id}}">Booking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal{{$villa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('book.store')}}" method="POST">
                              {{ csrf_field() }}
                              <input type="hidden" name="villa_id" value="{{$villa->id}}">
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput">Start Date</label>
                                <input type="date" name="start_date" class="form-control" id="formGroupExampleInput" placeholder="Start Date">
                              </fieldset>
                              <fieldset class="form-group">
                                <label for="formGroupExampleInput2">End Date</label>
                                <input type="date" name="end_date" class="form-control" id="formGroupExampleInput2" placeholder="End Date">
                              </fieldset>
                              <fieldset class="form-group">
                                <button type="submit" class="btn btn-warning" style="width: 100%">BOOK</button>
                              </fieldset>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- //courses -->


@endsection
