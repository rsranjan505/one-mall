
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Coupans')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">


<link rel="stylesheet" href="{{ asset('admin/vendors/css/forms/select/select2.min.css') }}">

@section('content')

<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header p-1">
                        <h4 class="card-title">Coupans List</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Coupans</button>
                    </div>

                    <table class="datatables-basic table" id="coupans-table">
                        <thead class="table-light">
                            <tr>
                                <th>SN</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Min Purchase Amount</th>
                                <th>Used</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>



@include('admin.components.coupans-offcanvass')

@include('admin.components.coupans-offcanvas-edit')

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


    // convert title into slug
    $('#name').on('keyup', function() {
        var name = $(this).val();
        var slug = slugify(name);
        $('#slug').val(slug);
    });

    $(' #edit_name').on('keyup', function() {
        var name = $(this).val();
        var slug = slugify(name);
        $('#edit_slug').val(slug);
    });

    $('#coupans-add-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form( this,'add');

    });

    $('#coupans-edit-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form(this,'edit');

    });

    getajaxdata('{{ route("coupans.index") }}','coupans');




  </script>
@endsection


