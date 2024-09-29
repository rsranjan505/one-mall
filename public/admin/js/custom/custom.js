// ############################
// ###### Custom JS File ######
// ############################


var token = document.querySelector('meta[name="csrf-token"]').content;

// quill text editor


var toolbarOptions = [
    ['bold', 'italic', 'underline'],        // toggled buttons
    ['blockquote'],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'align': [] }],
    ['clean']                                         // remove formatting button
  ];

  Quill.register('modules/counter', function(quill, options) {
    var container = document.querySelector(options.container);
    quill.on('text-change', function() {
      var text = quill.getText();
      if (options.unit === 'word') {
        container.innerText = text.split(/\s+/).length + ' words';
      } else {
        container.innerText = text.length + ' characters';
      }
    });
  });


/*
** Slug Generator **
**/

function slugify(text) {
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-');              // Replace spaces with -
        // .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        // .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        // .replace(/^-+/, '')             // Trim - from start of text
        // .replace(/-+$/, '');            // Trim - from end of text
}

function capitalize_first_letter(text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
}

$(document).ready(function () {
    // $('.select2').select2();

    // $('.select2-icons').select2({
    //     templateResult: iconFormat,
    //     templateSelection: iconFormat
    // });
    // $('.select2InModal').select2({
    //     templateResult: iconFormat,
    //     templateSelection: iconFormat
    // });

});

 //checkbox event for value
 $(function()
 {
     $('input[type="checkbox"]').click(function(){
         if($(this).is(':checked'))
         {
             $(this).val(1);
         }
         else
         {
             $(this).val(0);
         }
     });
 });


// clone div
var varient_element_count = 1;
var feature_element_count = 1;
$('#btn_attribute_id-feature').on('click', function () {

    clone_div('attribute_id-feature',feature_element_count)
})

$('#btn_attribute_id-varient').on('click', function () {

    clone_div('attribute_id-varient',varient_element_count)
})
function clone_div(clone_element,element_count) {

    var select_type = clone_element.split('-')[1];

    var options_count = $('#' + clone_element + '-0 option').length; // minus 1 for select item
    // if(element_count + 1 > options_count -1) {
    //     alert('cannot add more than ' + element_count + ' options');
    //     return false;
    // }
    // else{

        let clone_div = $('#div_main_' + clone_element ).clone();
        clone_div.attr('id', 'div_' + clone_element + '-' + element_count);
        // clone_div.find('#div_main_attribute_id-feature').remove();
        clone_div.find('.'+ select_type +'-select').attr('id', clone_element + '-' + element_count);
        clone_div.find('.'+ select_type +'-value').attr('id', clone_element + '-value-' + element_count)


        clone_div.appendTo('#div_' + clone_element);

        // if(select_type == 'feature') {
            // feature_element_count++

        // }
        // else
        // {
        //     varient_element_count++;
        // }
    // }
}


function getajaxdata(url, table)
{
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            if(table == 'category'){
                category_datatable(data);
            }else if(table == 'attribute'){

                attribute_datatable(data);
            }else if(table == 'product'){
                products_datatable(data);
            }

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
}

    function category_datatable(dataset)
    {

        $('#category-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'parent'},
                    { 'data': 'status'},
                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                  {
                  "targets": [0],
                  "orderable": false
                  }
                ],
        });
    }

    function attribute_datatable(dataset)
    {

        $('#attribute-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'type'},
                    { 'data': 'attribute_type'},
                    { 'data': 'status'},
                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                  {
                  "targets": [0],
                  "orderable": false
                  }
                ],
        });
    }


    function products_datatable(dataset)
    {

        $('#product-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'category'},
                    { 'data': 'out_of_stock'},
                    { 'data': 'price'},
                    { 'data': 'sku'},
                    { 'data': 'quantity'},
                    { 'data': 'status'},
                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                  {
                  "targets": [0],
                  "orderable": false
                  },
                  {
                    "targets": [1,2,3,4,5,6,7,8],
                    "createdCell": function (td, cellData, rowData, row, col) {

                    //    $(td).on('click', function(){
                    //         if(col != 8){
                    //             editProduct(rowData);
                    //         }
                    //    });
                       if(col == 8)
                        {
                            // console.log($(td).children().children().find('a#details'));
                            $(td).children().children().find('a#details').on('click', function(){
                                editProduct('details',rowData);
                            })
                            $(td).children().children().find('a#stock').on('click', function(){
                                editProduct('stock',rowData);
                            })
                            $(td).children().children().find('a#variants').on('click', function(){
                                editProduct('variants',rowData);
                            })
                            $(td).children().children().find('a#delete').on('click', function(){
                                editProduct('delete',rowData);
                            })
                        }
                    }
                  },
                ],
                createdRow: function (row, data, dataIndex) {
                    // if(selected_row != '' && selected_row == dataIndex)
                    // {
                    //     $(row).addClass('tr_bg_color');
                    // }
                    // row.onclick = function() {
                    //     $(row).parent().children().removeClass('tr_bg_color');
                    //     if(selected_row == dataIndex)
                    //     {
                    //         $(row).addClass('tr_bg_color');
                    //     }
                    // }
                },
        });
    }

    /* make it globale due to we access it in multiple places and when we update records*/
    var edit_short_description = '';
    var edit_description_editor = '';
    var edit_long_description_editor = '';

    function editProduct(menu,product_dt)
    {
        $('#edit_product').modal('show');
        var modal_body = '';
        $('#edit_product #modal-body').html('');
        if(menu == 'details')
        {
            modal_body = details_modal_body(product_dt);

            $('#edit_product #modal-body').html(modal_body);

            edit_short_description = new Quill('#edit_short_description_editor', {
                theme: 'snow' });
            edit_description_editor = new Quill('#edit_description_editor', {
                theme: 'snow' });
            edit_long_description_editor = new Quill('#edit_long_description_editor', {
                theme: 'snow' });


            $.ajax({
                url: 'products/'+product_dt.id,
                type: "GET",
                dataType: "json",
                success: function (response) {

                        edit_short_description.setContents(JSON.parse(response.data.short_description));
                        edit_description_editor.setContents(JSON.parse(response.data.description));
                        edit_long_description_editor.setContents(JSON.parse(response.data.long_description));

                },
                error: function (response) {
                    console.log('Error:', response);
                }
            });
        }
        else if(menu == 'stock')
        {
            modal_body = stock_modal_body(product_dt);
            $('#edit_product #modal-body').html(modal_body);
        }
        else if(menu == 'variants')
        {
            modal_body = varient_modal_body(product_dt);
            $('#edit_product #modal-body').html(modal_body);
        }

        $('input[type="checkbox"]').click(function(){
            if($(this).is(':checked'))
            {
                $(this).val(1);
            }
            else
            {
                $(this).val(0);
            }
        });

    }

    function details_modal_body(product_dt)
    {
        var body_div = '<form id="editProductForm" method="PATCH" action="'+product_dt.update_route+'" class="row gy-1 pt-75" data-table="products">'
                        + '<input type="hidden" name="form_type" id="form_type"  value="details">'
                        + '<div class="mb-1">'
                                + '<label class="form-label" for="edit_name">Name *</label>'
                                + '<input type="text" class="form-control" id="edit_name" placeholder="Product title" value="' + product_dt.name + '" name="name" aria-label="Product title">'
                                + '<span id="error-name" class="text-danger input-error"></span>'
                            + '</div>'
                        + '<div class="row mb-1">'
                            + '<div class="col">'
                                + '<label class="form-label" for="edit_sku">SKU</label>'
                                + '<input type="number" class="form-control" id="edit_sku" placeholder="SKU" value="' + product_dt.sku + '" name="sku" aria-label="Product SKU" >'
                            + '</div>'
                            + '<div class="col">'
                                + '<label class="form-label" for="edit_barcode">Barcode</label>'
                                + '<input type="text" class="form-control" id="edit_barcode" value="' + product_dt.barcode + '" placeholder="0123-4567" name="barcode" aria-label="Product barcode">'
                            + '</div>'
                        + '</div>'
                        + '<div>'
                        + '<label class="mb-1">Short Description *</label>'
                        + '<div class="form-control p-0">'
                            + '<input name="short_description" id="edit_short_description" type="hidden">'
                            + '<div id="edit_short_description_editor" class="editor-container"></div>'
                            + '<div id="edit_short_description_counter" class="counter">0 characters</div>'
                            + '<span id="error-short_description" class="text-danger input-error"></span>'
                        + '</div>'

                        + '<label class="mb-1 mt-2">Description *</label>'
                        + '<div class="form-control p-0">'
                            + '<input name="description" id="edit_description" type="hidden">'
                            + '<div id="edit_description_editor" class="editor-container"></div>'
                            + '<div id="edit_description_counter" class="counter">0 characters</div>'
                            + '<span id="error-description" class="text-danger input-error"></span>'
                        + '</div>'

                        + '<label class="mb-1 mt-2">Additional Information (Optional)</label>'
                        + '<div class="form-control p-0">'
                            + '<input name="long_description" id="edit_long_description" type="hidden">'
                            + '<div id="edit_long_description_editor" class="editor-container"></div>'
                            + '<div id="long_description_counter" class="counter">0 characters</div>'
                        + '</div>'
                    + '</div>'
                + '</form>';

        return body_div;
    }
    function stock_modal_body(product_dt)
    {

        var categories = JSON.parse(product_dt.categories);

        var category_options = '';
        categories.forEach(function (category) {
            let selection = product_dt.category_id == category.id ? 'selected' : '';
            category_options += '<option value="'+ category.id +'" '+ selection +' >' + category.name + '</option>'
        })

        var sub_category_options = '';
        categories.forEach(function (category) {
            if(category.children.length > 0)
            {
                category.children.forEach(function (subCategory) {
                    let selection = product_dt.sub_category == subCategory.id ? 'selected' : '';
                    sub_category_options += '<option value="'+ subCategory.id +'" '+ selection +' >' + subCategory.name + '</option>'
                })
            }
        })

        let feature_checked = product_dt.is_featured == 1 ? 'checked' : '';
        let popular_checked = product_dt.is_popular == 1 ? 'checked' : '';
        let new_checked = product_dt.is_latest == 1 ? 'checked' : '';
        let trending_checked = product_dt.is_trending == 1 ? 'checked' : '';
        let top_checked = product_dt.is_top_selling == 1 ? 'checked' : '';


        var body_div = '<form id="editProductForm" method="PATCH" action="'+product_dt.update_route+'" class="row gy-1 pt-75" data-table="products">'
                        + '<input type="hidden" id="form_type" value="stocks">'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                    + '<span class="mb-0">Is Featured Product</span>'
                                    + '<div class="w-25 d-flex justify-content-center">'
                                        + '<div class="form-check form-switch me-n3">'
                                            + '<input type="checkbox" name="is_featured" id="edit_is_featured" ' + feature_checked +' value="'+ product_dt.is_featured +'" class="form-check-input">'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                    + '<span class="mb-0">Is Popular Product</span>'
                                    + '<div class="w-25 d-flex justify-content-center">'
                                        + '<div class="form-check form-switch me-n3">'
                                            + '<input type="checkbox" name="is_popular" id="edit_is_popular" ' + popular_checked +' value="'+ product_dt.is_popular +'" class="form-check-input">'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Is Trending Product</span>'
                                    + '<div class="w-25 d-flex justify-content-center">'
                                        + '<div class="form-check form-switch me-n3">'
                                            + '<input type="checkbox" name="is_trending" id="edit_is_trending" ' + trending_checked +' value="'+ product_dt.is_trending +'" class="form-check-input">'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Is Latest Product</span>'
                                    + '<div class="w-25 d-flex justify-content-center">'
                                        + '<div class="form-check form-switch me-n3">'
                                            + '<input type="checkbox" name="is_latest" id="edit_is_latest" ' + new_checked +' value="'+ product_dt.is_latest +'" class="form-check-input">'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Is Top Selling Product</span>'
                                    + '<div class="w-25 d-flex justify-content-center">'
                                        + '<div class="form-check form-switch me-n3">'
                                            + '<input type="checkbox" name="is_top_selling" id="edit_is_top_selling" ' + top_checked +' value="'+ product_dt.is_top_selling +'" class="form-check-input">'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'

                            + '</div>'
                        + '</div>'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Price</span>'
                                    + '<div class="w-75 d-flex justify-content-center">'
                                        + ' <input type="number" class="form-control" value="' + product_dt.price + '" id="edit_price" placeholder="quantity" name="edit_price" aria-label="Product price" >'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Discount Price</span>'
                                    + '<div class="w-75 d-flex justify-content-center">'
                                        + ' <input type="number" class="form-control" value="' + product_dt.sale_price + '" id="edit_sale_price" placeholder="Price" name="sale_price" aria-label="Product discount price" >'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Quantity</span>'
                                    + '<div class="w-75 d-flex justify-content-center">'
                                        + ' <input type="number" class="form-control" value="' + product_dt.quantity + '" id="edit_quantity" placeholder="quantity" name="quantity" aria-label="Product quantity" >'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'

                            + '</div>'
                        + '</div>'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Category</span>'
                                    + '<div class="w-75 d-flex justify-content-center">'
                                        + '<select class="form-select select2" id="edit_category" name="category">'
                                            + '<option value="">Select category *</option>'
                                            + category_options
                                        + '</select>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Price</span>'
                                    + '<div class="w-75 d-flex justify-content-center">'
                                    + '<select class="form-select select2" id="edit_sub_category" name="sub_category">'
                                        + '<option value="">Select category *</option>'
                                        + sub_category_options
                                    + '</select>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                    + '</form>';
        return body_div;
    }

    function varient_modal_body(product_dt)
    {
        var attributes = JSON.parse(product_dt.attributes);
        var attributes_options = '';
        $.each(attributes, function (key, value) {
            attributes_options += '<option value="' + value.id + '">' + value.name + '</option>';
        })

        var body_div = '<form id="editProductForm" method="PATCH" action="'+product_dt.update_route+'" class="row gy-1 pt-75" data-table="products">'
                        + '<input type="hidden" id="form_type" value="varients">'
                        + '<div class="row">'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                + '<span class="mb-0">Variant Options</span>'
                                    + '<div class="w-50 d-flex justify-content-center">'
                                    + '<select class="form-select select2" id="edit_sub_category" name="sub_category">'
                                        + '<option value="">Select attribute </option>'
                                            + attributes_options
                                    + '</select>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-6">'
                                + '<div class="d-flex justify-content-between align-items-center pt-2">'
                                    + '<div class="w-50 d-flex justify-content-center">'
                                        + ' <input type="number" class="form-control" value="' + product_dt.price + '" id="edit_price" placeholder="Price" name="price" aria-label="Product price" >'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                    + '</form>'

            return body_div;
    }


    // function updateOutOfStock(product_id)
    // {

    // }
    //Form Submission
    function submit_form( form, opration)
    {
        var table_name = form.getAttribute('data-table'); // its a custom attribute added in the form

        var method = opration == 'add' ? 'POST' : 'PATCH';

        $.ajax({
        url: form.action,
        method: method,
        data: new FormData(form),
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'X-CSRF-Token': token
        },
        success: function(data) {

            if (data.status == 200) {

                $('.spinner-border').addClass('d-none');
                $('#success-msg').removeClass('d-none').text(data.message);
                $('#edit_success-msg').removeClass('d-none').text(data.message);

                setTimeout(() => {
                    $('#success-msg').addClass('d-none')
                    $('#edit_success-msg').addClass('d-none')
                }, 3000);
                if(opration == 'add'){
                    $('#' + table_name + '-add-form')[0].reset();
                }

                getajaxdata(window.location.href, table_name);
            }
        },
        error: function(response) {
                $('.spinner-border').addClass('d-none');
                $.each(response.responseJSON.errors, function(key, value) {
                    console.log(key);
                    if(opration == 'edit'){
                        $('#error_edit-' + key ).text(value[0]);
                        $('#edit_'+ key ).removeClass('border-0').addClass('iS-invalid');
                    }else{
                        $('#error-' + key ).text(value[0]);
                        $('#'+ key ).removeClass('border-0').addClass('iS-invalid');
                    }
                })
            }
        });
    }




    // here url is for update
    function editModel(id,url,table)
    {
        if(table == 'category'){
            edit_category(id,url);
        }
        else if(table == 'attribute'){
            edit_attribute(id,url);
        }
    }


    function edit_category(id,url)
    {
        var offcanvasElement = document.getElementById("offcanvasedit");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'categories/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#category-edit-form').attr('action',url);
                console.log(data);
                $("#edit_id").val(data.data.id);
                $("#edit_name").val(data.data.name);
                $("#edit_slug").val(data.data.slug);

                // let option = '';
                // if(data.data.parent_id != 0 && data.data.parent != null){
                //     option += '<option value="'+data.data.parent_id+'" selected>' + data.data.parent.name + '</option>';
                //     $('#edit_parent_id').append(option);
                // }
                $("#edit_parent_id option").each(function()
                {
                   if(this.value == data.data.parent_id)
                   {
                       $(this).prop('selected', 'selected');
                   }
                });

                $("#edit_status").val(data.data.status);
                $("#edit_description").val(data.data.description);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }

    function edit_attribute(id,url)
    {
        var offcanvasElement = document.getElementById("attribute_edit_canvas");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'attributes/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#attribute-edit-form').attr('action',url);

                $("#edit_id").val(data.data.id);
                $("#edit_name").val(capitalize_first_letter(data.data.name));

                $("#edit_type option").each(function()
                {
                   if(this.value == data.data.type)
                   {
                       $(this).attr('selected', 'selected');
                   }
                });

                $("#edit_attribute_type option").each(function()
                {
                   if(this.value == data.data.attribute_type)
                   {
                       $(this).attr('selected', 'selected');
                   }
                });

                $("#edit_status").val(data.data.status);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }


    function deleteConfirmation(model,url)
    {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url:url,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-Token': token
                   },
                    // data: {
                    //     id: 5
                    // },csrf-token
                    // dataType: "html",
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        }).then(function(success){
                            location.reload();
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: 'Cancelled',
                            text: err.message,
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        });

                    },

                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Your imaginary file is safe :)',
                icon: 'error',
                customClass: {
                confirmButton: 'btn btn-success'
                }
            });
            }
        });
    }

    // Status Update
    function statusConfirmation(url){

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, Change it!',
            customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url:url,
                    type: "GET",
                    headers: {
                        'X-CSRF-Token': token
                },
                    // data: {
                    //     id: 5
                    // },
                    // dataType: "html",
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Changed!',
                            text: 'Your status has been changed.',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        }).then(function(success){
                            location.reload();
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: 'Cancelled',
                            text: err.message,
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        });

                    },

                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Status not changed :)',
                icon: 'error',
                customClass: {
                confirmButton: 'btn btn-success'
                }
            });
            }
        });
    }






