
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Permissions')

@section('content')


<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h6 class="mb-0">Permission List</h6>
                        </div>
                        <div class="dt-action-buttons text-end">
                            <div class="dt-buttons d-inline-flex">
                                {{-- <a class="dt-button create-new btn btn-primary" href="{{route('roles.create')}}" tabindex="0"  type="button" >
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add Permission
                                    </span>
                                </a> --}}
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Add Permission</button>
                            </div>
                        </div>
                    </div>

                    <table class="table table-hover  w-100 text-nowrap table-striped" id="roles-table">
                        <thead class="table-dark">
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($permissions as $key => $item)
                                <tr>
                                    <td>{{ $key + 1}}</td>
                                    <td>
                                        <strong>{{$item->name }}</strong>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="editModel('{{$item->id}}','{{route('permissions.update',['permission' => $item])}}','permission')"><box-icon name="edit-alt" type="solid" color="#053ba9" class="icon-hover"></box-icon></a> | <a href="javascript:void(0);" onclick="deleteConfirmation('{{$item->id}}','{{ route('permissions.destroy',['permission' => $item]) }}')"><box-icon name="trash" type="solid" color="#ff0505"  class="icon-hover"></box-icon></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@include('admin.components.permissions-offcanvass')

@include('admin.components.permissions-offcanvas-edit')

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>

  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>

  <script>
        // convert title into slug
    //     $('#name').on('keyup', function() {
    //         var name = $(this).val();
    //         var slug = slugify(name);
    //         $('#name').val(slug);
    //     });

    // $(' #edit_name').on('keyup', function() {
    //     var name = $(this).val();
    //     var slug = slugify(name);
    //     $('#edit_name').val(slug);
    // });

    $('#permissions-add-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form( this,'add');

    });

    $('#permissions-edit-form').on('submit', function(e) {
      e.preventDefault();

      $('.spinner-border').removeClass('d-none');

      $('.form-control').removeClass('border-danger').addClass('bg-light');
      $('.input-error').text('');

      submit_form(this,'edit');

    });
  </script>

@endsection


