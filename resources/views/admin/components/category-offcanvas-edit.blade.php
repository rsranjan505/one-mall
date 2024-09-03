<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasedit" aria-labelledby="offcanvasEndLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
    <h5 id="offcanvasEndLabel" class="offcanvas-title">Update Category</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
        <form id="category-edit-form" method="post" action="" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-1">
            <label class="form-label" for="name">Title</label>
            <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter category title"/>
            <span id="error_edit-name" class="text-danger input-error"></span>
            </div>
            <div class="mb-1">
            <label class="form-label" for="slug">Slug</label>
            <input type="text" class="form-control" id="edit_slug" name="slug" readonly/>
            <span id="error_edit-slug" class="text-danger input-error"></span>
            </div>
            <div class="mb-1">
            <label class="form-label" for="file">Attachment</label>
            <div class="input-group input-group-merge">
                <input type="file" id="edit_file" name="file" class="form-control"  />
                <span class="input-group-text" id="file"></span>
            </div>
            <span id="error_edit-file" class="text-danger input-error"></span>
            </div>
            <div class="mb-1">
                <label class="form-label" for="parent_id">Parent Category</label>
                <select class="form-select select2" id="edit_parent_id" name="parent_id">
                <option value="">Select Category</option>
                @if (isset($categories))
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ ucfirst($category->name)}}</option>
                    @endforeach
                @endif

                </select>
            </div>
            <div class="mb-1">
            <label class="form-label" for="description">Description</label>
            <textarea id="edit_description" name="description" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
        </form>


        <span class="text-success text-success d-none fs-5 fw-bold" id="edit_success-msg"></span>
    </div>
</div>
