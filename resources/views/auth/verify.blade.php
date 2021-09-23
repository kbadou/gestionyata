@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






@extends('layouts.app_login')

@section('content')
<div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    
    <form  class="login-form"method="POST" action="{{ route('verification.resend') }}">
                        @csrf
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">{{ __('Verify Your Email Address') }}</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
</div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">{{ __('click here to request another') }}</button>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="#">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
        @if (Route::has('password.request'))                               
        <p class="margin right-align medium-small"><a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}</a></p>
  @endif
        </div>
      </div>
    </form>
  </div>
  @endsection