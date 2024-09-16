
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Attribute')

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
                    <div class="card-header p-0">
                        <h4 class="card-title">Attribute</h4>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Attribute</button>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table class="table" id="attribute-table">
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



@include('admin.components.attribute-offcanvas')

@include('admin.components.attribute-offcanvas-edit')


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

    $('#attribute-add-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form( this,'add');

      getajaxdata('{{ route("attributes.index") }}','attribute');
    });

    $('#attribute-edit-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form(this,'edit');

    });

    getajaxdata('{{ route("attributes.index") }}','attribute');

    $(document).ready(function () {
        // $('#add_value_element').on('click', function () {
        //     $('#default_value_ele').append(`<div  class="d-flex flex-row justify-between mb-1" >
        //                 <input type="text" class="form-control w-3/4" id="default_value" name="default_value" placeholder="Enter Field name"/>
        //                 <span class="w-1/4 px-1 m-auto" id="add_value_element">
        //                     <box-icon name="x-circle" type="solid" color="rgb(245 18 18);" class="icon-hover"></box-icon>
        //                 </span>
        //             </div>`);
        // })

    });

  </script>
@endsection


