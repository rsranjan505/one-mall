
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
                            <h6 class="mb-0">Roles</h6>
                        </div>
                        <div class="dt-action-buttons text-end">
                            {{-- <div class="dt-buttons d-inline-flex">
                                <a class="dt-button create-new btn btn-primary" href="{{route('users.create')}}" tabindex="0"  type="button" >
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add Role
                                    </span>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    {{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!} --}}
                    <form id="role-add-form" action="{{ route('roles.update',$role->id) }}" data-table="role"  method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="mobile">Role Name</label>
                                <input type="text" id="name" name="name" placeholder="Role Name" class="form-control phone-mask @error('name') is-invalid @enderror" value="{{ $role->name }}" placeholder="Name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-primary form-check-sm">
                                    <input class="form-check-input" type="checkbox" id="checkAll" />
                                    <label class="form-check-label" for="checkAll">Check All</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <strong>Permission:</strong>
                                <br/> <br/>
                                <div class="row">
                                    @php
                                        $old=0;
                                    @endphp
                                    @foreach($permission as $key => $value)
                                        @if ($old == $key)
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-check form-switch mb-2">
                                                    {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input','id'=>"flexSwitchCheckChecked")) }}
                                                    {{ ucfirst($value->name) }}</label> --}}

                                                    <label><input type="checkbox" class="form-check-input" name="permission[]" value="{{ $value->name }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>{{ ucfirst($value->name) }}</label>
                                                </div>
                                            </div>
                                        @else
                                        @php
                                            $old = $key;
                                        @endphp
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-check form-switch mb-2">
                                                    {{-- <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input','id'=>"flexSwitchCheckChecked")) }}
                                                    {{ ucfirst($value->name) }}</label> --}}
                                                    <label><input type="checkbox" class="form-check-input" name="permission[]" value="{{ $value->name }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>{{ ucfirst($value->name) }}</label>

                                                </div>
                                            </div>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    {{-- {!! Form::close() !!} --}}
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

    // check all
    $('#checkAll').change(function() {
        $('.form-check-input').not(this).prop('checked', this.checked);
    });

  </script>
@endsection


