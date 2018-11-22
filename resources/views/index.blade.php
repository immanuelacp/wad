@extends('master')
@section('content')

    <!-- courses -->

    <section class="wthree-row w3-about  py-5">
        <div class="container py-md-4 mt-md-3">
            <h3 class="heading-agileinfo">The <span>Villa</span></h3>
            <div class="card-deck mt-md-5 pt-5">
                @foreach($villas as $villa)

                    <div class="card">
                        <img src="{{asset('storage/'.$villa->photo)}}" class="img-fluid" alt="Card image cap">
                        <div class="card-body w3ls-card">
                            <h5 class="card-title">{{$villa->name}}</h5>
                            <p class="card-text mb-3">{{$villa->address}}</p>
                            <p class="card-text mb-3">Rp. {{$villa->price}}</p>
                            <p class="card-text mb-3">{{$villa->desc}}</p>

                            <div class="ab_button">
                                <a class="btn btn-primary btn-lg hvr-underline-from-left" href="/show" role="button">Booking</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- //courses -->


@endsection