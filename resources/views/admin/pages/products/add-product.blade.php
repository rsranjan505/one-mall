
@extends('admin.layout.contentLayoutMaster')

@section('title', 'Attribute')

@section('vendor-style')


<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/file-uploaders/dropzone.min.css') }}">

@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/forms/form-file-uploader.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/base/plugins/forms/form-quill-editor.css') }}">
@endsection

@section('content')

    <!-- Add Product -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-2 row-gap-2">
        <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1">Add a new Product</h4>
            <p class="mb-0">Orders placed across your store</p>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-4">
            <div class="d-flex gap-4"><button class="btn btn-label-secondary waves-effect" >Discard</button>
            <button class="btn btn-label-primary waves-effect" >Save draft</button></div>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_product_publish" >Publish product</button>
        </div>
    </div>

    <form id="product-add-form" action="{{ route('products.store') }}" data-table="product"  method="POST" enctype="multipart/form-data" onsubmit="return false">
        @csrf
        <div class="row">
            <!-- First column-->
            <div class="col-12 col-lg-8">
                <!-- Product Information -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Product information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label class="form-label" for="name">Name *</label>
                            <input type="text" class="form-control" id="name" placeholder="Product title" name="name" aria-label="Product title">
                            <span id="error-name" class="text-danger input-error"></span>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label class="form-label" for="sku">SKU</label>
                                <input type="number" class="form-control" id="sku" placeholder="SKU" name="sku" aria-label="Product SKU" >
                            </div>
                            <div class="col">
                                <label class="form-label" for="barcode">Barcode</label>
                                <input type="text" class="form-control" id="barcode" placeholder="0123-4567" name="barcode" aria-label="Product barcode">
                            </div>
                        </div>
                        <!-- Description -->
                        <div>
                            <label class="mb-1">Short Description *</label>
                            <div class="form-control p-0">
                                <input name="short_description" id="short_description" type="hidden">
                                <div id="short_description_editor" class="editor-container"></div>
                                <div id="short_description_counter" class="counter">0 characters</div>
                                <span id="error-short_description" class="text-danger input-error"></span>
                            </div>

                            <label class="mb-1 mt-2">Description *</label>
                            <div class="form-control p-0">
                                <input name="description" id="description" type="hidden">
                                <div id="description_editor" class="editor-container"></div>
                                <div id="description_counter" class="counter">0 characters</div>
                                <span id="error-description" class="text-danger input-error"></span>
                            </div>

                            <label class="mb-1 mt-2">Additional Information (Optional)</label>
                            <div class="form-control p-0">
                                <input name="long_description" id="long_description" type="hidden">
                                <div id="long_description_editor" class="editor-container"></div>
                                <div id="long_description_counter" class="counter">0 characters</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Information -->
                <!-- Media -->
                <div class="card mb-2">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 card-title">Product Image</h5>
                        <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                    </div>
                    <div class="card-body ">
                        <div action="#" class="dropzone dropzone-area" id="dpz-product-images">
                            <div class="dz-message">Drop files here or click to upload.</div>
                        </div>
                        {{-- <input type="hidden" name="product_images[]" id="product_images" multiple> --}}
                    </div>
                </div>
                <!-- /Media -->
                <!-- Variants -->
                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Variants</h5>
                    </div>
                    <div class="card-body">
                        <div id="div_main_attribute_id-varient">
                            <div class="row">
                                <div class="mb-2 col-4">
                                    <label class="form-label" for="attribute_id-varient">Options</label>
                                    <select class="form-select varient-select" id="attribute_id-varient-0" name="attribute_id[]">
                                        <option value="">Select Varient</option>
                                        @if (isset($attributes))
                                            @foreach ($attributes->where('attribute_type', 'varient') as $attribute)
                                                <option value="{{$attribute->id}}">{{ ucfirst($attribute->name)}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                                <div class="mb-2 col-8">
                                    <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                                    <input type="text" id="attribute_id-varient-value-0" name="attribute_value[]" class="form-control varient-value" placeholder="Enter value" >
                                </div>
                            </div>
                        </div>
                        <div id="div_attribute_id-varient"></div>
                        <div>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_attribute_id-varient" data-repeater-create="">
                            <i class="ti ti-plus ti-xs me-2"></i>
                            Add another option
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Attributes</h5>
                    </div>
                    <div class="card-body">
                        <div id="div_main_attribute_id-feature">
                            <div class="row">
                                <div class="mb-2 col-4">
                                    <label class="form-label" for="attribute_id-feature">Options</label>
                                    <select class="form-select feature-select" id="attribute_id-feature-0" name="attribute_id[]">
                                        <option value="">Select feature</option>
                                        @if (isset($attributes))
                                            @foreach ($attributes->where('attribute_type', 'feature') as $attribute)
                                                <option value="{{$attribute->id}}">{{ ucfirst($attribute->name)}}</option>
                                            @endforeach
                                        @endif

                                    </select>
                                </div>
                                <div class="mb-2 col-8">
                                    <label class="form-label invisible" for="form-repeater-1-2">Not visible</label>
                                    <input type="text" id="attribute_id-feature-value-0" name="attribute_value[]" class="form-control feature-value" placeholder="Enter value" >
                                </div>
                            </div>
                        </div>

                        <div id="div_attribute_id-feature"></div>
                        <div>
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_attribute_id-feature" data-repeater-create="" >
                            <i class="ti ti-plus ti-xs me-2"></i>
                            Add another option
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4">
                <!-- Pricing Card -->
                <div class="card mb-2">
                <div class="card-header">
                    <h5 class="card-title mb-0">Pricing</h5>
                </div>
                <div class="card-body">
                    <!-- Base Price -->
                    <div class="mb-2">
                        <label class="form-label" for="price">Base Price *</label>
                        <input type="number" class="form-control" id="price" placeholder="Price" name="price" aria-label="Product price" >
                        <span id="error-price" class="text-danger input-error"></span>
                    </div>
                    <!-- Discounted Price -->
                    {{-- <div class="mb-2">
                    <label class="form-label" for="discount-price">Discounted Price</label>
                    <input type="number" class="form-control" id="discount-price" placeholder="Discounted Price" name="discount-price" aria-label="Product discounted price" >
                    </div> --}}
                    <!-- Charge tax check box -->
                    <div class="form-check ms-2 mt-2 mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked="">
                        <label class="switch-label" for="price-charge-tax">
                        Charge tax on this product
                    </label>
                    </div>
                    <!-- Instock switch -->
                    <div class="d-flex justify-content-between align-items-center border-top pt-2">
                    <span class="mb-0">In stock</span>
                    <div class="w-25 d-flex justify-content-end">
                        <div class="form-check form-switch me-n3">
                        <input type="checkbox" class="form-check-input">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /Pricing Card -->
                <!-- Organize Card -->
                <div class="card mb-2">
                <div class="card-header">
                    <h5 class="card-title mb-0">Organize</h5>
                </div>
                <div class="card-body">
                    <!-- Vendor -->
                    <div class="mb-2 col ecommerce-select2-dropdown">
                        <label class="form-label" for="vendor">
                            Category
                        </label>
                        <select class="form-select select2" id="category" name="category">
                            <option value="">Select category *</option>
                            @if (isset($categories))
                                @foreach ($categories->where('parent_id', null) as $category)
                                    <option value="{{$category->id}}">{{ ucfirst($category->name)}}</option>
                                @endforeach
                            @endif
                        </select>
                        <span id="error-category" class="text-danger input-error"></span>
                    </div>
                    <!-- Category -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 col ecommerce-select2-dropdown">
                            <label class="form-label" for="sub_category">
                                <span>Sub Category *</span>
                            </label>

                            <select class="form-select select2" id="sub_category" name="sub_category">
                                <option value="">Select sub category</option>
                                @if (isset($categories))
                                    @foreach ($categories as $category)
                                        @if (isset($category->children) && count($category->children) > 0 )
                                            @foreach ($category->children as $item)
                                                <option value="{{$item->id}}">{{ ucfirst($item->name)}}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                            <span id="error-sub_category" class="text-danger input-error"></span>
                        </div>
                    </div>
                    <!-- Collection -->
                    <div class="mb-6 col ecommerce-select2-dropdown">
                        <label class="form-label" for="collection">Collection
                        </label>
                        <select class="form-select select2" id="collection" name="collection">
                            <option value="">Select collection</option>
                            @if (isset($categories))
                                @foreach ($categories as $category)
                                    @if (isset($category->children) && count($category->children) > 0 )
                                        @foreach ($category->children as $item)
                                            <option value="{{$item->id}}">{{ ucfirst($item->name)}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </select>

                    </div>
                    <!-- Status -->
                    <div class="mb-2 col ecommerce-select2-dropdown">
                        <label class="form-label mt-2" for="status">Status
                        </label>
                        <select class="form-select select2" id="status" name="status">
                            <option value="">Select status</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <!-- Tags -->
                </div>
                </div>
                <!-- /Organize Card -->

                <!-- Additional Card -->
                <div class="card mb-2">
                    <div class="card-header">
                    <h5 class="card-title mb-0">Additional Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                            <span class="mb-0">Is Featured Product</span>
                            <div class="w-25 d-flex justify-content-center">
                            <div class="form-check form-switch me-n3">
                                <input type="checkbox" name="featured" id="featured" class="form-check-input">
                            </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <span class="mb-0">Is Popular Product</span>
                            <div class="w-25 d-flex justify-content-center">
                            <div class="form-check form-switch me-n3">
                                <input type="checkbox" name="is_popular" id="is_popular" class="form-check-input">
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <span class="mb-0">Is Trending Product</span>
                            <div class="w-25 d-flex justify-content-center">
                            <div class="form-check form-switch me-n3">
                                <input type="checkbox" name="is_trending" id="is_trending" class="form-check-input">
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <span class="mb-0">Is Latest Product</span>
                            <div class="w-25 d-flex justify-content-center">
                            <div class="form-check form-switch me-n3">
                                <input type="checkbox" name="is_latest" id="is_latest" class="form-check-input">
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2">
                            <span class="mb-0">Is Top Selling Product</span>
                            <div class="w-25 d-flex justify-content-center">
                            <div class="form-check form-switch me-n3">
                                <input type="checkbox" name="is_top_selling" id="is_top_selling" class="form-check-input">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Additional Card -->


            </div>
        <!-- /Second column -->
        </div>
    </form>

@endsection

@section('vendor-script')

  <script src="{{ asset('admin/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/forms/select/select2.full.min.js') }}"></script>
  <script src="{{ asset('admin/js/scripts/forms/form-select2.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>


  <script src="{{ asset('admin/vendors/js/file-uploaders/dropzone.min.js') }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset('admin/js/scripts/forms/form-file-uploader.js') }}"></script>


  <script src="{{ asset('admin/js/custom/custom.js') }}"></script>
  <script>
    // convert title into slug

    $('#product-add-form').on('submit', function(e) {
        e.preventDefault();

        $('.spinner-border').removeClass('d-none');

        $('.form-control').removeClass('border-danger').addClass('bg-light');
        $('.input-error').text('');

        submit_form( this,'add');

    //   getajaxdata('{{ route("attributes.index") }}','attribute');
    });


    $(document).ready(function () {


    });

    var upload_images = {};
    var drp = new Dropzone("#dpz-product-images", {
        url: "{{ route('file.upload') }}",
        type: 'post',
        paramName: "file", // The name that will be used to transfer the file
        acceptedFiles : ".png,.jpg,.jpeg",
        clickable: true,
        maxFilesize: 1, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function (file, response) {
            console.log(response);
            $('#product-add-form').append('<input type="hidden" name="product_images[]" value="' + response.name + '">')

            upload_images[file.name] = response.name
        },
        removedfile: function (file) {
                file.previewElement.remove()
                var name = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name;
                } else {
                    name = upload_images[file.name];
                }
                $('#product-add-form').find('input[name="product_images[]"][value="' + name + '"]').remove()
            }
        });

    // drp.on("addedfile", function (file) {
    // // Hookup the start button

    //     reader = new FileReader();
    //     reader.onload = function (event) {
    //         imageData = event.target.result;
    //         console.log(imageData);
    //         images.push(imageData);

    //         $('#product-add-form').append('<input type="hidden" name="product_images[]" value="' + file.name + '">')
    //     };
    //     reader.readAsDataURL(file);

    // });


    var short_description = new Quill('#short_description_editor', {
        modules: {
        toolbar: toolbarOptions,
        counter: {
            container: '#short_description_counter',
            unit: 'character'
        }
        },
        theme: 'snow' });

    var description = new Quill('#description_editor', {
        modules: {
        toolbar: toolbarOptions,
        counter: {
            container: '#description_counter',
            unit: 'character'
        }
        },
        theme: 'snow' });

    var long_description = new Quill('#long_description_editor', {
        modules: {
        toolbar: toolbarOptions,
        counter: {
            container: '#long_description_counter',
            unit: 'character'
        }
        },
        theme: 'snow' });

        // Dropzone.options.productAddForm = { // camelized version of the `id`
        //     paramName: "file", // The name that will be used to transfer the file
        //     maxFilesize: 2, // MB
        //     accept: function(file, done) {
        //     if (file.name == "justinbieber.jpg") {
        //         console.log("A file has been added not");
        //     }
        //     else {
        //         console.log("A file has been added");
        //         }
        //     }
        // };

        // let myDropzone = Dropzone("#product-add-form", { /* options */ });
        // myDropzone.on("addedfile", file => {
        // console.log("A file has been added");
        // });


    $('#btn_product_publish').on('click', function(e) {

        var form = $('#product-add-form');
        // var formData = new FormData(form[0]);
        // e.preventDefault();
        // submit_form( form,'add');
        $('input[name=short_description]').val(JSON.stringify(short_description.getContents()));
        $('input[name=long_description]').val(JSON.stringify(long_description.getContents()));
        $('input[name=description]').val(JSON.stringify(description.getContents()));

        // $('#product_images').val(images);


        //  $.each(images, function() {
        //     var file = $(this);
        //     formData.append(file[0].name, file[0]);
        //     console.log(file);

        // });

        // var files = form.find("#product_images")[0].files;

        $.ajax({
            type: "POST",
            url: "{{ route('products.store') }}",
            data: form.serialize(),
            success: function (response) {
                console.log(response)
                if(response.status == 'success'){
                    window.location.href = "{{ route('products.index') }}";
                }
            },
            error: function(response) {
                $('.spinner-border').addClass('d-none');
                $.each(response.responseJSON.errors, function(key, value) {
                    console.log(key);

                    $('#error-' + key ).text(value[0]);
                    $('#'+ key ).removeClass('border-0').addClass('is-invalid');

                })
            }
        });
    });


// var form = document.querySelector('form');
// form.onsubmit = function() {
//   // Populate hidden form on submit
//   var about = document.querySelector('input[name=box]');
//   about.value = JSON.stringify(quill.getContents());

//   console.log("field length: " + about.value.length + " ", $(form).serialize(), $(form).serializeArray());

//   // No back end to actually submit to!
//   alert('Open the console to see the submit data!')
//   return false;
// };



  </script>
@endsection
