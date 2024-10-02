
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Orders')

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
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h6 class="mb-0">Orders List</h6>
                        </div>
                        <div class="dt-action-buttons text-end">
                            <div class="dt-buttons d-inline-flex">
                                <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true" fdprocessedid="7pwq92i">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share font-small-4 me-50"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>Export
                                    </span>
                                </button>
                                <a class="dt-button create-new btn btn-primary" href="{{route('Orders.create')}}" tabindex="0"  type="button" >
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add New Product
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                        <table class="datatables-basic table" id="product-table">
                            <thead class="table-light">
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>STOCK</th>
                                    <th>PRICE</th>
                                    <th>SKU</th>
                                    <th>QTY</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>

                </div>
            </div>
        </div>
    </div>
</section>


@include('admin.modals.product-edit-modal')

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>

  <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js') }}"></script>

  <script src="{{ asset('admin/js/scripts/forms/form-select2.js') }}"></script>
  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
  <script>


    getajaxdata('{{ route("orders.index") }}','product');

  </script>
@endsection


