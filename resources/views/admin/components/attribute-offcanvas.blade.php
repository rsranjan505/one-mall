
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
    <h5 id="offcanvasEndLabel" class="offcanvas-title">Add Attribute</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
        <form id="attribute-add-form" method="post" data-table="attribute" action="{{ route('attributes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label class="form-label" for="name">Field Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Field name"/>
                <span id="error-name" class="text-danger input-error"></span>
            </div>
            <div class="mb-1">
                <label class="form-label" for="type">Field type</label>
                <select class="form-select" id="type" name="type">
                    <option value="">Select attribute</option>
                    <option value="input">Text Box</option>
                    <option value="textarea">Text Area</option>
                    <option value="radio">Radio</option>
                    <option value="checkbox">Checkbox</option>
                    <option value="select">Dropdown</option>
                    <option value="file">File</option>
                    <option value="date">Date</option>
                    <option value="time">Time</option>
                    <option value="number">Number</option>
                </select>
                <span id="error-type" class="text-danger input-error"></span>
            </div>
            <div class="mb-1">
                <label class="form-label" for="attribute_type">Attribute type</label>
                <select class="form-select" id="attribute_type" name="attribute_type">
                    <option value="">Select Attribute Type</option>
                    <option value="feature">Feature</option>
                    <option value="varient">Varient</option>

                </select>
                <span id="error-attribute_type" class="text-danger input-error"></span>
            </div>
            {{-- <div class="mb-1">
                <label class="form-label" for="default_value">Default Value</label>
                <div id="default_value_ele">
                    <div  class="d-flex flex-row justify-between mb-1" >
                        <input type="text" class="form-control w-3/4" id="default_value" name="default_value" placeholder="Enter Field name"/>
                        <span class="w-1/4 px-1 m-auto" id="add_value_element">
                            <box-icon name="plus-circle" type="solid" color="#053ba9" class="icon-hover"></box-icon>
                        </span>
                    </div>
                </div>

            </div> --}}

            <button type="submit" class="btn btn-primary">Save</button>
            <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
        </form>


        <span class="text-success text-success d-none fs-5 fw-bold" id="success-msg"></span>
    </div>
</div>
