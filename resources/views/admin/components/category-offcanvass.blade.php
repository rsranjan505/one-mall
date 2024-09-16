
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-6">
        <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Category</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Offcanvas Body -->
        <div class="offcanvas-body border-top">
            <form id="category-add-form" method="post" data-table="category" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-1">
                <label class="form-label" for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category title"/>
                <span id="error-name" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                <label class="form-label" for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" readonly/>
                <span id="error-slug" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                <label class="form-label" for="file">Attachment</label>
                <div class="input-group input-group-merge">
                    <input type="file" id="file" name="file" class="form-control"  />
                    <span class="input-group-text" id="file"></span>
                </div>
                <span id="error-file" class="text-danger input-error"></span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="parent_id">Parent Category</label>
                    <select class="form-select select2" id="parent_id" name="parent_id">
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
                    <textarea id="description" name="description" class="form-control" placeholder="Description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
                <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
            </form>


            <span class="text-success text-success d-none fs-5 fw-bold" id="success-msg"></span>
        </div>
    </div>
