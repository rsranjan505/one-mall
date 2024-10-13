
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Users')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">

@section('content')


<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h6 class="mb-0">Users List</h6>
                        </div>
                        <div class="dt-action-buttons text-end">
                            <div class="dt-buttons d-inline-flex">
                                <a class="dt-button create-new btn btn-primary" href="{{route('users.create')}}" tabindex="0"  type="button" >
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add User
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>


                        <table class="datatables-basic table table-hover  w-100 text-nowrap table-striped" id="users-table">
                            <thead class="table-light">
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Last Login</th>
                                    <th>Role</th>
                                    <th>Created At</th>
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


{{-- @include('admin.modals.product-edit-modal') --}}

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>

  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
  <script>


    getajaxdata('{{ route("users.index") }}','user');





  </script>
@endsection


