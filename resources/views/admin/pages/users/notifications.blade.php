
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Users - Notifications')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">

@section('content')

<section class="app-user-view-security">

    <div class="row">

        @if (isset($user))
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card">
                <div class="card-body">
                    <div class="user-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        <img
                        class="img-fluid rounded mt-3 mb-2"
                        src="{{ $user->image ? $user->image->url : asset('img/6596121.png')}}"
                        height="110"
                        width="110"
                        alt="User avatar"
                        />
                        <div class="user-info text-center">
                        <h4>{{ ucfirst($user->first_name) . ' ' . ucfirst($user->last_name) }}</h4>
                        <span class="badge bg-light-secondary">Author</span>
                        </div>
                    </div>
                    </div>
                    {{-- <div class="d-flex justify-content-around my-2 pt-75">
                        <div class="d-flex align-items-start me-2">
                            <span class="badge bg-light-primary p-75 rounded">
                            <i data-feather="check" class="font-medium-2"></i>
                            </span>
                            <div class="ms-75">
                            <h4 class="mb-0">1.23k</h4>
                            <small>Tasks Done</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <span class="badge bg-light-primary p-75 rounded">
                            <i data-feather="briefcase" class="font-medium-2"></i>
                            </span>
                            <div class="ms-75">
                            <h4 class="mb-0">568</h4>
                            <small>Projects Done</small>
                            </div>
                        </div>
                    </div> --}}
                    <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                    <div class="info-container">
                    <ul class="list-unstyled">
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Email:</span>
                            <span>{{ $user->email }}</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Status:</span>
                            @if ($user->is_active)
                                <span class="badge bg-light-success">Active</span>
                            @else
                                <span class="badge bg-light-danger">Inactive</span>
                            @endif

                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Role:</span>
                            <span>Author</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Contact:</span>
                            <span>{{ $user->mobile }}</span>
                        </li>
                    </ul>
                    {{-- <div class="d-flex justify-content-center pt-2">
                        <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal"
                        >Edit</a
                        >
                        <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspended</a>
                    </div> --}}
                    </div>
                </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.profile', $user->id)}}">
                        <i data-feather="user" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">Profile</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('users.security', $user->id)}}">
                        <i data-feather="lock" class="font-medium-3 me-50"></i>
                        <span class="fw-bold">Security</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="{{ route('users.notification', $user->id)}}">
                        <i data-feather="bell" class="font-medium-3 me-50"></i><span class="fw-bold">Notifications</span>
                        </a>
                    </li>
                </ul>
                <!--/ User Pills -->

                <!-- notifications -->

                <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-50">User Notification</h4>
                </div>
                <div class="card-body">

                </div>
                {{-- <div class="card-body">
                    <button type="submit" class="btn btn-primary me-1">Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Discard</button>
                </div> --}}
                </div>

                <!--/ notifications -->
            </div>
            <!--/ User Content -->
        @endif
    </div>

</section>

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


