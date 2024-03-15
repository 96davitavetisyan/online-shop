@extends('site.app1')
@section('title', 'Login')
@section('content')
<div style="margin-top: 120px">
    <section class="section-pagetop ">
        <div class="container clearfix">
            <h2 class="title-page">Log In</h2>
        </div>
    </section>
</div>
<section class="section-content bg padding-y border-top pt-0">
    <section class="contact section-padding">
        <div class="container">
             <div class="row">
                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center pt-0" data-aos="fade-up">
                    <h1 class="mb-4">Log in <strong>now</strong> and continue shopping</h1>
                    <p>Your first visit ? <a  href="{{route('register')}}">Register </a></p>
                </div>
                  <div class=" mx-auto col-md-7  ">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-lg-6 mx-auto col-6">
                            <label for="email" >{{ __('E-mail address') }}</label>

                                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="padding: 24px 30px 24px 20px;"
                                       placeholder="e-mail address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-lg-6 mx-auto col-6">
                            <label for="password" class="">Password</label>
                                <input id="password" type="password" class="form-control mb-2 @error('password') is-invalid @enderror" rows="6"  name="password" required autocomplete="current-password" style="padding: 24px 30px 24px 20px;"
                                        placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                            <div class=" mb-3">
                                <div class="form-check text-center ">
                                    <input class="form-check-input  " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label "  for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@stop
