@extends('site.app')
@section('title', 'La Caisse')
@section('content')
<div style="margin-top: 110px">
    <section class="section-pagetop ">
        <div class="container clearfix">
            <h2 class="title-page">THE BOX</h2>
        </div>
    </section>
</div>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form" id="addToCart">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name"
                                               value="{{ old('first_name') }}" style="padding: 24px 30px 24px 20px;"
                                        />
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('first_name') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col form-group">
                                        <label>Last_name <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               name="last_name"
                                               value="{{ old('last_name') }} " style="padding: 24px 30px 24px 20px;"
                                        />
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('last_name') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address <span class="text-danger">*</span> </label>
                                    <input type="text"
                                           class="form-control @error('address') is-invalid @enderror"
                                           name="address"
                                           value="{{ old('address') }}" style="padding: 24px 30px 24px 20px;">
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('address') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('city') is-invalid @enderror"
                                               name="city"
                                               value="{{ old('city') }}" style="padding: 24px 30px 24px 20px;">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('city') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('country') is-invalid @enderror"
                                               name="country"
                                               value="Armenia" readonly="" style="padding: 24px 30px 24px 20px;">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('country') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Post Code <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('post_code') is-invalid @enderror"
                                               name="post_code"
                                               value="{{ old('post_code') }}" style="padding: 24px 30px 24px 20px;">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('post_code') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Phone Number <span class="text-danger">*</span> </label>
                                        <input type="text"
                                               class="form-control @error('phone_number') is-invalid @enderror"
                                               name="phone_number"
                                               value="{{ old('phone_number') }}" style="padding: 24px 30px 24px 20px;">
                                        <div class="invalid-feedback active">
                                            <i class="fa fa-exclamation-circle fa-fw"></i> @error('phone_number') <span>{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>E-mail adress <span class="text-danger">*</span> </label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled style="padding: 24px 30px 24px 20px;">
                                    <small class="form-text text-muted">
                                        We will never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label>Order Notes </label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror"
                                              name="notes"
                                              rows="6">
                                    </textarea>
                                    <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('notes') <span>{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" value="1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            I accept the terms and conditions. <a target="_blank" href="{{url('/')}}/documents/conditions.pdf">Even</a>
                                        </label>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Your order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Under Total: </dt>
                                            <dd class="text-right h5 b"> {{ \Cart::getSubTotal() }} AMD</dd>
                                            <input type="hidden" name="subtotal" id="subtotal" value="{{ \Cart::getSubTotal() }}">
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Delivery: </dt>
                                            <dd class="text-right h5 b costo"> {{config('settings.shipping')}} AMD</dd>
                                            <input type="hidden" name="costo_envio" id="costo_envio" value="{{config('settings.shipping')}}">
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Amount: </dt>
                                            <dd class="text-right h5 b total_price"></dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Payment methods</h4>
                                    </header>
                                    <article class="card-body">
                                        {{-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="forma_pago" id="forma_pago" value="PCB">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Dépôt ou virement bancaire
                                            </label><br>
                                            <div class="cuenta">
                                                <strong>Compte bancaire</strong>
                                            </div>
                                        </div> --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="forma_pago" id="forma_pago" value="PEPM">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Cash payment
                                            </label>
                                        </div>
                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" name="forma_pago" id="forma_pago" value="PAYPAL">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Payment with credit card
                                            </label>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" style="background-color: #c66;border: rgb(250, 250, 250);" class="subscribe btn btn-success btn-lg btn-block">To order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop
@push('scripts')
<script>
    $(document).ready(function () {
        var subtotal = $('#subtotal').val();
        var envio = $('#costo_envio').val();
        var total = parseFloat(subtotal) + parseFloat(envio);
        $('.total_price').text( total.toFixed(2) + ' AMD');
        $('#addToCart').submit(function (e) {
            var val = $('input:radio[name=forma_pago]:checked').val();
            var terms = $('input:checkbox[name=terms]:checked').val();
            if (terms == null) {
                e.preventDefault();
                swal('You must accept the Terms and Conditions.');
                return
            }
            if (val == null) {
                e.preventDefault();
                swal('Choose a payment method.');
                return
            }
            $('body').loading({
                message: 'Payment processing...',
                theme: 'dark'
            });
        });
    });
</script>
@endpush

