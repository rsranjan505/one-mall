// ############################
// ###### Custom JS File ######
// ############################


var token = document.querySelector('meta[name="csrf-token"]').content;

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


function getajaxdata(url, table)
{console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            if(table == 'category'){
                category_datatable(data);
            }else if(table == 'district'){

                district_datatable(data);
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
                    { 'data': 'slug'} ,
                    { 'data': 'images'},
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

    function submit_form( form, opration)
    {
        $.ajax({
        url: form.action,
        method: "POST",
        data: new FormData(form),
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
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
                    $('#category-add-form')[0].reset();
                }

                window.location.href

                getajaxdata(window.location.href, 'category');
            }
        },
        error: function(response) {
            $('.spinner-border').addClass('d-none');
            $.each(response.responseJSON.errors, function(key, value) {
                console.log(key);
                if(opration == 'edit'){
                    $('#error_edit-' + key ).text(value[0]);
                    $('#edit_'+ key ).removeClass('border-0').addClass('border-danger');
                }else{
                    $('#error-' + key ).text(value[0]);
                    $('#'+ key ).removeClass('border-0').addClass('border-danger');
                }

            })
        }

        });
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


function editModel(id,url)
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

            let option = '';
            if(data.data.parent_id != 0 && data.data.parent != null){
                option += '<option value="'+data.data.parent_id+'" selected>' + data.data.parent.name + '</option>';
                $('#edit_parent_id').append(option);
            }

            $("#edit_status").val(data.data.status);
            $("#edit_description").val(data.data.description);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });

    console.log(id);

    return offcanvas.toggle();
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




//     //amenity
//     $("#amenity-table").DataTable({
//         processing: true,
//         serverSide: true,
//       ajax:"amenity",
//       data: {
//         _token: $('input[name="_token"]').val()
//         },
//       columns: [
//         // { data: 'responsive_id'},
//         {data: 'id', name: 'id',
//             orderable: false,
//             searchable: false,
//         },
//         { data: 'name', name: 'name'},
//         { data: 'type',name: 'type' },
//         { data: 'description',name: 'description' },
//         { data: 'is_active',name: 'is_active' },
//         { data: 'created_at',name: 'created_at' },
//         { data: 'updated_at', name: 'updated_at' },
//         { data: 'action',name: 'action' }
//       ],
//       columnDefs: [
//         {
//           className: 'control',
//           orderable: false,
//           targets: 0
//         }

//       ],
//       language: {
//         paginate: {
//           // remove previous & next text from pagination
//           previous: '&nbsp;',
//           next: '&nbsp;'
//         }
//       }
//     });

//     //Feature
//     $("#feature-table").DataTable({
//         processing: true,
//         serverSide: true,
//         ajax:"feature",
//         data: {
//         _token: $('input[name="_token"]').val()
//         },
//         columns: [
//         // { data: 'responsive_id'},
//         {data: 'id', name: 'id',
//             orderable: false,
//             searchable: false,
//         },
//         { data: 'name', name: 'name'},
//         { data: 'type',name: 'type' },
//         { data: 'description',name: 'description' },
//         { data: 'is_active',name: 'is_active' },
//         { data: 'created_at',name: 'created_at' },
//         { data: 'updated_at', name: 'updated_at' },
//         { data: 'action',name: 'action' }
//         ],
//         columnDefs: [
//         {
//             className: 'control',
//             orderable: false,
//             targets: 0
//         }

//         ],
//         language: {
//         paginate: {
//             // remove previous & next text from pagination
//             previous: '&nbsp;',
//             next: '&nbsp;'
//         }
//         }
//     });


//     //amenity
//     $("#commission-table").DataTable({
//         processing: true,
//         serverSide: true,
//       ajax:"commission",
//       data: {
//         _token: $('input[name="_token"]').val()
//         },
//       columns: [
//         // { data: 'responsive_id'},
//         {data: 'id', name: 'id',
//             orderable: false,
//             searchable: false,
//         },
//         { data: 'profile_id', name: 'profile_id'},
//         { data: 'percentage', name: 'percentage'},
//         { data: 'flat_rate', name: 'flat_rate'},
//         // { data: 'Hospital Name', name: 'Hospital Name'},
//         // { data: 'Commission Percentage',name: 'Commission Percentage' },
//         // { data: 'Commission Flat Rate',name: 'Commission Flat Rate' },
//         { data: 'is_active',name: 'is_active' },
//         { data: 'action',name: 'action' }
//       ],
//       columnDefs: [
//         {
//           className: 'control',
//           orderable: false,
//           targets: 0
//         }

//       ],
//       language: {
//         paginate: {
//           // remove previous & next text from pagination
//           previous: '&nbsp;',
//           next: '&nbsp;'
//         }
//       }
//     });



//       // Filter form control to default size for all tables
//   $('.dataTables_filter .form-control').removeClass('form-control-sm');
//   $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');

// // }


// //sweet alert
// function deleteConfirmation(id,model){

//     var id = id;
//     if(model=='feature'){
//         var url ='';
//     }else if(model=='amenity'){
//         var url ='';
//     }

//         Swal.fire({
//             title: 'Are you sure?',
//             text: "You won't be able to revert this!",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonText: 'Yes, delete it!',
//             customClass: {
//             confirmButton: 'btn btn-primary',
//             cancelButton: 'btn btn-outline-danger ms-1'
//             },
//             buttonsStyling: false
//         }).then(function (result) {
//             if (result.value) {
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Deleted!',
//                 text: 'Your file has been deleted.',
//                 customClass: {
//                 confirmButton: 'btn btn-success'
//                 }
//             });
//             } else if (result.dismiss === Swal.DismissReason.cancel) {
//             Swal.fire({
//                 title: 'Cancelled',
//                 text: 'Your imaginary file is safe :)',
//                 icon: 'error',
//                 customClass: {
//                 confirmButton: 'btn btn-success'
//                 }
//             });
//             }
//         });
// }


