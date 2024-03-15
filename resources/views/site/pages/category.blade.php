@extends('site.app1')
@section('title', $category->name)
@section('content')
<div style="margin-top: 120px">
</div>
<section class="section-content bg padding-y">
    <div class="container">
        <div class = "col-12 d-flex">
            <div class = "col-3"></div>
            <div class="col-9">

                <div id="code_prod_complex" id="grid">
                    <div class="row">
                        <img src="{{ asset('storage/'.$category->image) }}">
                        @forelse($category->products as $product)
                            @php
                                $portions= explode(" ", $product->name);
                            @endphp
                            <div class="col-md-4 picture-item" data-groups='["{{strtolower($portions[0])}}"]'>
                                <figure class="card card-product p-4" href="{{ route('product.show', $product->slug) }}">
                                    @if ($product->images->count() > 0)
                                        <div class="img-wrap padding-y"><img src="{{ asset('storage/'.$product->images->first()->full) }}" alt="{{$product->name}}"></div>
                                    @else
                                        <div class="img-wrap padding-y"><img src="/frontend/img/slider4.jpg" alt="{{$product->name}}"></div>
                                    @endif
                                    <figcaption class="">
                                        <h7 class="title" ><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h7>
                                    </figcaption>
                                        @php
//                                            $portionss= round($product->weight);
                                        @endphp
                                        <figcaption class="d-flex justify-content-end">
                                            <span class = "weight p-1">{{ $product->weight }}g</span>
                                        </figcaption>
                                        <hr>
                                    <div class="text-center">
                                        @if ($product->special_price != 0)
                                            <div class="price-wrap" style = "font-size:12px;">
                                                <span style="color: #c66" class="price" > {{ $product->special_price.config('settings.currency_symbol') }} </span>
                                                <del class="price-old"> {{ $product->price.config('settings.currency_symbol') }}</del>
                                            </div>
                                        @else
                                            <div class="price-wrap h5">
                                                <span style="color: #c66" class="price"> {{ $product->price.config('settings.currency_symbol') }} </span>
                                            </div>
                                        @endif

                                        <a href="{{ route('product.show', $product->slug) }}" style="background-color: #c66; border : #c66" class="btn btn-sm  btn btn-dark mt-2"><i class="fa fa-cart-arrow-down"></i> Buy now</a>

                                    </div>
                                </figure>
                            </div>
                        @empty
                            <p class="alert alert-warning">No products found in {{ $category->name }}.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@stop

