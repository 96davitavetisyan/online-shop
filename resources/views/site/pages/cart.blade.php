@extends('site.app')
@section('title', 'Panier')
@section('content')
<div style="margin-top: 110px">
    <section class="section-pagetop ">
        <div class="container clearfix">
            <h2 class="title-page">BASKET</h2>
        </div>
    </section>
</div>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <main class="col-sm-9">
                    @if (\Cart::isEmpty())
                        <p class="alert alert-warning">Your basket is empty.</p>
                    @else
                        <div class="card">
                            <table class="table shopping-cart-wrap ">
                                <thead class=" thead-dark">
                                <tr style="LINE-HEIGHT:50px">
                                    <th scope="col" >Product</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Total</th>
                                    <th scope="col" class="text-right" width="200"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\Cart::getContent() as $item)
                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <figcaption class="media-body">
                                                    <h6 class="title text-truncate text-dark">{{ strtoupper($item->name) }}</h6>
                                                    @foreach($item->attributes as $key  => $value)
                                                        <dl class="dlist-inline small">
                                                            <dt>{{ ucwords($key) }}: </dt>
                                                            <dd>{{ ucwords($value) }}</dd>
                                                        </dl>
                                                    @endforeach
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price text-dark">{{ ($item->price).'AMD'}}</var>
                                            </div>
                                        </td>
                                        <td>
                                            <var class="price text-dark">{{ $item->quantity }}</var>
                                        </td>
                                        <td>
                                                <var class="price text-dark">{{ ($item->price)*($item->quantity).'AMD'  }}</var>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('checkout.cart.remove', $item->id) }}" class="btn btn-outline-dark"><i class="fa fa-times"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </main>
                <aside class="col-sm-3">
                    <a href="{{ route('checkout.cart.clear') }}" class="btn btn-dark btn-block mb-4">Clear the basket</a>
                    {{-- <p class="alert alert-success">
                        Ajoutez 5,00 USD d'articles éligibles à votre commande pour bénéficier de la livraison GRATUITE. </p> --}}
                    <dl class="dlist-align ">
                        <dt>Delivery :</dt>
                        <dd class="text-right"><b>{{ config('settings.shipping') }}AMD</b></dd>
                    </dl>
                    <hr>
                    <dl class="dlist-align ">
                        <dt>Amount :</dt>
                        <dd class="text-right"><b>{{ \Cart::getSubTotal()+config('settings.shipping') }}AMD</b></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside text-dark"><i class="far fa-money-bill-alt fa-3x"></i></aside>
                        <div class="text-wrap small text-muted">
                            Pay cash at your door
                            <br> and receive your items
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside text-dark"> <i class="fab fa-cc-paypal fa-3x"></i></aside>
                        <div class="text-wrap small text-muted">
                            Pay now securely with
                            <br> your credit card
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside text-dark"> <i class="fas fa-shipping-fast fa-3x"></i></aside>
                        <div class="text-wrap small text-muted">
                            Pay now and receive your items
                            <br> as soon as possible
                        </div>
                    </figure>
                    <a href="{{ route('checkout.index') }}" class="btn btn-outline-dark btn-lg btn-block">Proceed to checkout</a>
                </aside>
            </div>
        </div>
    </section>
@stop
