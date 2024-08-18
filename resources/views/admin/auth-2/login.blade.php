@extends('admin.layout.base')

@section('title', 'Login Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/forms/form-validation.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/pages/authentication.css') }}">
@endsection

@section('content')
<div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo">
            <svg width="32" height="32" viewBox="0 0 171 171" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M67.862 42.824C64.355 46.9866 59.9177 50.2662 54.9132 52.3943C49.9086 54.5225 44.4791 55.4387 39.0688 55.0681L25.5271 44.6118C22.9847 42.6493 21.3327 39.752 20.9346 36.5574C20.5364 33.3628 21.4246 30.1325 23.4039 27.5772C25.3832 25.0219 28.2913 23.3509 31.4886 22.9318C34.6859 22.5127 37.9104 23.3798 40.4528 25.3424L65.7798 44.8983L67.862 42.824Z" fill="#FCCA07"/>
                <path d="M124.416 20.9405L81.0424 63.8937C77.3379 67.5512 72.442 69.7507 67.2619 70.0848C62.0817 70.4189 56.9683 68.865 52.8689 65.7108L39.0928 55.0761C44.5031 55.4467 49.9326 54.5305 54.9372 52.4023C59.9417 50.2742 64.3791 46.9946 67.886 42.832L107.387 3.71971C108.517 2.5553 109.866 1.62656 111.356 0.987899C112.846 0.349242 114.446 0.013516 116.063 0.000399775C117.68 -0.0127165 119.282 0.29704 120.773 0.911514C122.265 1.52599 123.617 2.43282 124.75 3.57888C125.884 4.72493 126.775 6.08716 127.373 7.58573C127.971 9.0843 128.263 10.6891 128.232 12.306C128.201 13.9229 127.847 15.5195 127.192 17.0022C126.537 18.4849 125.593 19.8238 124.416 20.9405Z" fill="#FE5955"/>
                <path d="M46.5118 150.461L89.5602 107.183C93.239 103.499 98.1189 101.263 103.297 100.89C108.475 100.516 113.601 102.03 117.727 105.15L131.583 115.681C126.176 115.352 120.759 116.308 115.777 118.473C110.795 120.638 106.389 123.95 102.92 128.136L63.7125 167.542C61.4163 169.754 58.3509 170.984 55.1732 170.969C51.9956 170.953 48.9586 169.693 46.7131 167.459C44.4676 165.225 43.1924 162.195 43.1607 159.018C43.1291 155.84 44.3435 152.769 46.5437 150.461L46.5118 150.461Z" fill="#FE5955"/>
                <path d="M102.92 128.136C106.392 123.942 110.804 120.626 115.794 118.46C120.784 116.293 126.209 115.338 131.623 115.673L145.24 126.03C146.506 126.992 147.569 128.195 148.367 129.571C149.165 130.946 149.684 132.468 149.893 134.048C150.102 135.628 149.997 137.235 149.585 138.779C149.173 140.322 148.462 141.772 147.491 143.044C146.521 144.316 145.311 145.387 143.93 146.194C142.549 147.001 141.024 147.53 139.443 147.749C137.861 147.968 136.254 147.874 134.713 147.472C133.172 147.07 131.728 146.368 130.462 145.406L104.987 126.046L102.92 128.136Z" fill="#FCCA07"/>
                <path d="M20.8103 47.1849L63.6161 90.1426C67.2608 93.812 69.4438 98.6866 69.7608 103.864C70.0778 109.041 68.5074 114.17 65.3403 118.301L54.6469 132.17C55.0394 126.756 54.1431 121.333 52.0315 116.348C49.92 111.363 46.6532 106.958 42.4994 103.493L3.51721 64.3747C1.24949 62.0996 -0.0156398 59.0109 0.000145971 55.788C0.0159318 52.5651 1.31134 49.4722 3.60139 47.1895C5.89143 44.9068 8.98852 43.6214 12.2113 43.6161C15.4342 43.6108 18.5187 44.886 20.7864 47.1611L20.8103 47.1849Z" fill="#FE5955"/>
                <path d="M42.5231 103.516C46.6769 106.981 49.9436 111.387 52.0552 116.372C54.1668 121.357 55.0631 126.779 54.6705 132.194L44.1849 145.856C43.2088 147.124 41.9937 148.189 40.6091 148.99C39.2244 149.792 37.6973 150.313 36.1149 150.526C34.5324 150.738 32.9257 150.637 31.3865 150.228C29.8472 149.819 28.4056 149.11 27.1439 148.143C25.8821 147.175 24.825 145.967 24.0328 144.587C23.2407 143.208 22.729 141.684 22.527 140.103C22.325 138.522 22.4367 136.914 22.8557 135.373C23.2747 133.831 23.9927 132.384 24.9688 131.116L44.6076 105.601L42.5231 103.516Z" fill="#01E3A4"/>
                <path d="M149.685 123.824L106.947 80.7985C103.309 77.1223 101.135 72.2435 100.828 67.0657C100.52 61.8878 102.1 56.7616 105.275 52.6364L115.968 38.7665C115.803 41.0587 115.863 43.3602 116.149 45.6375C117.211 54.1745 121.472 61.9707 128.072 67.4561L166.986 106.642C168.107 107.771 168.994 109.11 169.595 110.584C170.196 112.059 170.5 113.639 170.489 115.235C170.479 116.831 170.154 118.411 169.534 119.885C168.914 121.359 168.01 122.699 166.874 123.828C165.738 124.956 164.393 125.851 162.915 126.462C161.436 127.073 159.854 127.387 158.258 127.387C156.663 127.387 155.085 127.073 153.614 126.462C152.144 125.851 150.81 124.956 149.689 123.828L149.685 123.824Z" fill="#FE5955"/>
                <path d="M128.068 67.4521C121.468 61.9667 117.208 54.1705 116.145 45.6335C115.86 43.3562 115.799 41.0547 115.965 38.7625L126.494 25.1362C128.47 22.5783 131.375 20.9033 134.572 20.4797C137.768 20.0561 140.994 20.9186 143.539 22.8775C146.084 24.8363 147.74 27.7311 148.143 30.925C148.545 34.1188 147.662 37.3501 145.686 39.908L126.004 65.3875L128.068 67.4521Z" fill="#01E3A4"/>
                </svg>

            <h2 class="brand-text text-primary ms-1">JivanSurksha</h2>
        </a>

        <h4 class="card-title mb-1">Welcome to JivanSurksha! 👋</h4>
        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="auth-login-form mt-2" action="{{ route('/login')}}" method="POST">
            @csrf
          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="user_name"
              name="user_name"
              placeholder="john@example.com"
              aria-describedby="login-email"
              tabindex="1"
              autofocus
            />
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
              <a href="{{url('auth/forgot-password-basic')}}">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="password"
                name="password"
                tabindex="2"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="login-password"
              />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
          </div>
          <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div>
          <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
        </form>

        {{-- <p class="text-center mt-2">
          <span>New on our platform?</span>
          <a href="{{url('auth/register-basic')}}">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div> --}}

        {{-- <div class="auth-footer-btn d-flex justify-content-center">
          <a href="#" class="btn btn-facebook">
            <i data-feather="facebook"></i>
          </a>
          <a href="#" class="btn btn-twitter white">
            <i data-feather="twitter"></i>
          </a>
          <a href="#" class="btn btn-google">
            <i data-feather="mail"></i>
          </a>
          <a href="#" class="btn btn-github">
            <i data-feather="github"></i>
          </a>
        </div> --}}
      </div>
    </div>
    <!-- /Login basic -->
  </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset('admin/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('admin/js/scripts/pages/auth-login.js')}}"></script>
@endsection
