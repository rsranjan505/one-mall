
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Users')


@section('content')


<section id="basic-tabs-components">
    <div class="row ">
      <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header border-bottom p-1">
                        <div class="head-label">
                            <h6 class="mb-0">Add New User </h6>
                        </div>

                    </div>

                    <div class="card-body">
                        <form id="editUserForm" class="row gy-1 pt-75" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="col-12 col-md-6">
                            <label class="form-label" for="first_name">First Name</label>
                            <input
                                type="text"
                                id="first_name"
                                name="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                value="{{ old('first_name') }}"
                                placeholder="John"
                                data-msg="Please enter your first name"
                            />
                            </div>
                            <div class="col-12 col-md-6">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input
                                type="text"
                                id="last_name"
                                name="last_name"
                                class="form-control @error('last_name') is-invalid @enderror"
                                value="{{ old('last_name') }}"
                                placeholder="Doe"
                                data-msg="Please enter your last name"
                            />
                            </div>

                            <div class="col-12 col-md-6">
                            <label class="form-label" for="email">Email:</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                placeholder="example@domain.com"
                            />
                            </div>
                            <div class="col-12 col-md-6">
                            <label class="form-label" for="mobile">Mobile:</label>
                            <input
                                type="text"
                                id="mobile"
                                name="mobile"
                                class="form-control @error('mobile') is-invalid @enderror"
                                value="{{ old('mobile') }}"
                                placeholder="0000 000 000"
                            />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="is_active">Status</label>
                                <select
                                    id="is_active"
                                    name="is_active"
                                    class="form-select"
                                    aria-label="select"
                                >
                                    <option selected>Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="role">Role</label>
                                <select
                                    id="role"
                                    name="role"
                                    class="form-select"
                                    aria-label="select"
                                >
                                    <option selected>Roles</option>
                                    @if (isset($roles) && count($roles) > 0)
                                        @foreach ($roles as $item)
                                            <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="col-12 text-left mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Discard
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- @include('admin.modals.product-edit-modal') --}}

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>

  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
  <script>


  </script>
@endsection


