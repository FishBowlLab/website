@extends('layouts.shop')
   
@section('content')
    
<div class="row">
    @foreach($shirts as $shirt)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ asset('storage/'.$shirt->image) }}" alt="{{ $shirt->name }}" class="card-img-top cart-img">
                <div class="card-body">
                    <h4 class="card-title">{{ $shirt->name }}</h4>
                    <p>{{ $shirt->artist }}</p>
                    <p class="card-text"><strong>Price: </strong> ${{ $shirt->price }}</p>
                    <p class="btn-holder"><a href="{{ route('addshirt.to.cart', $shirt->id) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection