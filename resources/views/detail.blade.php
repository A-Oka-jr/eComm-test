@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product->gallery}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/login">Go back</a>
                <h2>{{$product->name}}  <span class="text-info">{{$product->catigory}}</span></h2>
                <h2>Price :{{$product->price}}</h2>
                <h2>{{$product->descr}}</h2>
                <br><br>
                <button class="btn btn-primary">Add to cart</button>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>

@endsection
