@extends('admin.layout.app-login')

@section('title', 'Login Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/forms/form-validation.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/pages/authentication.css') }}">
@endsection

@section('content')

<div class="authentication-wrapper authentication-basic px-6">
    <div class="authentication-inner py-6">
      <!-- Verify Email -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center mb-6">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
  </svg>
  </span>
              <span class="app-brand-text demo text-heading fw-bold">Vuexy</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-1">Verify your email ✉️</h4>
          <p class="text-start mb-0">
            Account activation link sent to your email address: hello@example.com Please follow the link inside to continue.
          </p>
          <a class="btn btn-primary w-100 my-6" href="index.html">
            Skip for now
          </a>
          <p class="text-center mb-0">Didn't get the mail?
            <a href="javascript:void(0);">
              Resend
            </a>
          </p>
        </div>
      </div>
      <!-- /Verify Email -->
    </div>
  </div>
@endsection

@section('vendor-script')
<script src="{{asset('admin/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('admin/js/scripts/pages/auth-login.js')}}"></script>
@endsection


{{-- @extends('layouts.app')

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
@endsection --}}
