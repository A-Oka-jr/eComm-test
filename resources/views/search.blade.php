@extends('master')
@section('content')
    <div class="trending-wrapper">
        <h3> Result</h3>
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="detail/{{ $product->id }}">
                                <img src="{{ $product->gallery }}" alt="Avatar" style="width:100% ;height: 289px ;">
                                <div class="card-container">
                                    <h4><b>{{ $product->name }}</b></h4>
                                    <p>{{ $product->descr }}</p>
                                    <p>Price:{{ $product->price }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>





        {{-- @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <a href="detail/{{ $product->id }}">
                    <img src="{{ $product->gallery }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->descr }}</p>
                        <p class="card-text">{{ $product->price }}</p>
                    </div> --}}
        {{-- <a href="#" class="btn btn-primary">{{ $product->name }}</a> --}}
        {{-- </a> --}}
        {{-- </div> --}}
        {{-- @endforeach --}}



    </div>
    </div>

@endsection
