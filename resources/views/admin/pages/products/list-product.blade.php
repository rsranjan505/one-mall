
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Products')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">


<link rel="stylesheet" href="{{ asset('admin/vendors/css/forms/select/select2.min.css') }}">

@section('content')



<div class="card mb-6">
    <div class="card-widget-separator-wrapper">
      <div class="card-body card-widget-separator">
        <div class="row gy-4 gy-sm-1">
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-4 pb-sm-0">
              <div>
                <p class="mb-1">In-store Sales</p>
                <h4 class="mb-1">$5,345.43</h4>
                <p class="mb-0"><span class="me-2">5k orders</span><span class="badge bg-label-success">+5.7%</span></p>
              </div>
              <span class="avatar me-sm-6">
                <span class="avatar-initial rounded"><i class="ti-28px ti ti-smart-home text-heading"></i></span>
              </span>
            </div>
            <hr class="d-none d-sm-block d-lg-none me-6">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-4 pb-sm-0">
              <div>
                <p class="mb-1">Website Sales</p>
                <h4 class="mb-1">$674,347.12</h4>
                <p class="mb-0"><span class="me-2">21k orders</span><span class="badge bg-label-success">+12.4%</span></p>
              </div>
              <span class="avatar p-2 me-lg-6">
                <span class="avatar-initial rounded"><i class="ti-28px ti ti-device-laptop text-heading"></i></span>
              </span>
            </div>
            <hr class="d-none d-sm-block d-lg-none">
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start border-end pb-4 pb-sm-0 card-widget-3">
              <div>
                <p class="mb-1">Discount</p>
                <h4 class="mb-1">$14,235.12</h4>
                <p class="mb-0">6k orders</p>
              </div>
              <span class="avatar p-2 me-sm-6">
                <span class="avatar-initial rounded"><i class="ti-28px ti ti-gift text-heading"></i></span>
              </span>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="mb-1">Affiliate</p>
                <h4 class="mb-1">$8,345.23</h4>
                <p class="mb-0"><span class="me-2">150 orders</span><span class="badge bg-label-danger">-3.5%</span></p>
              </div>
              <span class="avatar p-2">
                <span class="avatar-initial rounded"><i class="ti-28px ti ti-wallet text-heading"></i></span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header pb-1">
                        {{-- <h4 class="card-title">Products</h4> --}}
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Products</button>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table class="table" id="product-table">
                            <thead class="table-light">
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Attribute Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>

  <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js') }}"></script>

@endsection
@section('page-script')

  <script src="{{ asset('admin/js/scripts/forms/form-select2.js') }}"></script>
  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
  <script>



    getajaxdata('{{ route("attributes.index") }}','attribute');

    $(document).ready(function () {

    });

  </script>
@endsection


