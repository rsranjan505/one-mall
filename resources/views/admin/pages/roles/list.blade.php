
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Roles')

@section('content')


<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h6 class="mb-0">Roles List</h6>
                        </div>
                        <div class="dt-action-buttons text-end">
                            <div class="dt-buttons d-inline-flex">
                                <a class="dt-button create-new btn btn-primary" href="{{route('roles.create')}}" tabindex="0"  type="button" >
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add Role
                                    </span>
                                </a>
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
                                    @foreach ($roles as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>
                                                <strong>{{$item->name }}</strong>
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="{{ route('roles.edit', $item->id)}}" class="dropdown-item" id="details">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 me-50"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                                        </svg>
                                                        Edit
                                                    </a>


                                                    <a href="javascript:void(0);" onclick="deleteConfirmation('{{ $item->id }}', '{{ route('roles.destroy',['role' => $item] ) }}')" class="dropdown-item delete-record" id="delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                        Delete
                                                    </a>
                                                </div>
                                             </div>
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


@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>

  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>

@endsection


