
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
    <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Permission</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
        <form id="permissions-add-form" method="post" data-table="permissions" action="{{ route('permissions.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label class="form-label" for="name">Permission Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Permission name"/>
                <span id="error-code" class="text-danger input-error"></span>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
        </form>


        <span class="text-success text-success d-none fs-5 fw-bold" id="success-msg"></span>
    </div>
</div>
