@extends('admin.layout.app-login')

@section('title', 'Forget Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/forms/form-validation.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/pages/authentication.css') }}">
@endsection

@section('content')


<div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
      <!-- Forgot Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              {{-- <span class="app-brand-logo demo">@include('_partials.macros',['width'=>25,'withbg' => "#696cff"])</span> --}}
              <span class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Forgot Password? 🔒</h4>
          <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
          <form id="formAuthentication" class="mb-3" action="javascript:void(0)" method="GET">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
            </div>
            <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
          </form>
          <div class="text-center">
            <a href="{{ route('login')}}" class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
              Back to login
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>

@endsection
