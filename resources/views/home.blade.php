@extends('layouts.app')

@section('content')
<div class="container">
    
        
            <div class="product-container">
                @foreach ($coffees as $coffee)
                    @php
                    $brand = str_replace(' ', '_', $coffee->brand);
                    $type = str_replace(' ', '_', $coffee->type); 
                    @endphp
                    <div class="product-info">
                        <img src="/storage/{{ $coffee->photo }}" alt="Product Image">
                        <div class="product-name"><a href="/brand/{{ $brand }}">{{ $coffee->brand }}</a></div>
                        <div class="product-type"><a >{{ $coffee->model }}</a></div>
                        <div class="product-type"><a href="/type/{{ $type }}">{{ $coffee->type }}</a></div>
                        <div class="product-price">₺{{ $coffee->price }} </div>
                        <div class="product-add">Sepete Ekle</div>
                    </div>
                @endforeach
                
            </div>
</div>


@endsection
