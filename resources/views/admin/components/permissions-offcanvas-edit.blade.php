
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasedit" aria-labelledby="offcanvaseditLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
    <h5 id="offcanvaseditLabel" class="offcanvas-title">Add Permission</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
        <form id="permissions-edit-form" method="post" data-table="permissions" action="" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-1">
                <label class="form-label" for="name">Permission Name</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Permission name"/>
                <span id="error-edit_name" class="text-danger input-error"></span>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
        </form>


        <span class="text-success text-success d-none fs-5 fw-bold" id="success-msg"></span>
    </div>
</div>
