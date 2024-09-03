
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Category')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">

  <link rel="stylesheet" href="{{ asset('admin/vendors/css/extensions/toastr.min.css') }}">
@endsection
@section('page-style')
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/extensions/ext-component-toastr.css') }}">
@endsection

<link rel="stylesheet" href="{{ asset('admin/vendors/css/forms/select/select2.min.css') }}">


{{-- <link rel="stylesheet" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/vendor/libs/quill/editor.css"> --}}

@section('content')

<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">Category List</h4>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Category</button>
                        </div>

                        <div class="table-responsive text-nowrap">
                          <table class="table" id="category-table">
                            <thead class="table-light">
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            {{-- <tbody class="table-border-bottom-0">
                              <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                <td>Albert Cook</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                      <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                      <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                      <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                  </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                <td>Barry Hunter</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                      <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                      <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                      <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                  </ul>
                                </td>
                                <td><span class="badge bg-label-success me-1">Completed</span></td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                <td>Trevor Baker</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                      <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                      <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                      <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                  </ul>
                                </td>
                                <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong></td>
                                <td>Jerry Milton</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                      <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                      <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                      <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
                                    </li>
                                  </ul>
                                </td>
                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody> --}}
                          </table>
                        </div>
                </div>
            </div>
        </div>
    </div>


@include('admin.components.category-offcanvass')

@include('admin.components.category-offcanvas-edit')


@endsection

@section('vendor-script')
  <script src="{{ asset('admin/vendors/js/extensions/toastr.min.js') }}"></script>

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

    $('#category-add-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form( this,'add');

    });

    $('#category-edit-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form(this,'edit');

    });

    getajaxdata('{{ route("categories.index") }}','category');

  </script>
@endsection


