@extends('layout')

@section('title', 'List Product')

@section('content')


@if ($products->count() > 0)
<section class="product spad">
    <div class="container">
    <h2>Search results for "{{ $query }}"</h2>
        <div class="row">
           
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ url($product->img) }}">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="{{ url($product->img) }}" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{ route('products.show', $product->id) }}">{{$product->name}}</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ {{$product->price}} </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@else
<p>No products found</p>
@endif
@endsection