
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
  {{-- vendor css files --}}
  {{-- <link rel="stylesheet" href="{{ asset('admin/vendors/css/charts/apexcharts.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/extensions/toastr.min.css') }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset('admin/css/base/pages/dashboard-ecommerce.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/charts/chart-apex.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/extensions/ext-component-toastr.css') }}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Congratulations 🎉 John! gfhf</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#">$48.9k</a>
          </h3>
          <button type="button" class="btn btn-primary">View Sales</button>
          <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
</div>
    <!--/ Medal Card -->

</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  {{-- <script src="{{ asset('admin/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
  <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  {{-- <script src="{{ asset('admin/js/scripts/pages/dashboard-ecommerce.js') }}"></script> --}}
@endsection
