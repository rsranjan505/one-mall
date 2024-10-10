// /************************
//  * Market Place JS
//  */

var token = document.querySelector('meta[name="csrf-token"]').content;
var sub_categories_arry = [];

function addTocart(product_id, qty_elementId = '') {
    var quantity = 1;
    if (qty_elementId != '') {
        quantity = $('#' + qty_elementId).siblings('.input-spinner').children('input').val();
    }

    $.ajax({
        url: "/add-to-cart",
        type: "POST",
        data: {
            product_id: product_id,
            quantity: quantity,
            qty_flag: true
        },
        headers: {
            'X-CSRF-Token': token
        },
        dataType: "JSON",
        success: function(response) {
            $('.cart-count').text(response.data.cart_count);

            toastr['success']('', 'Added Item In Your Cart 🛒', {
                closeButton: true,
                tapToDismiss: false
            });
        }
    });
}

function updateQuantity(cart_element, page = 'cart') {
    var quantity = $(cart_element).siblings('.input-spinner').children('input').val();

    var cart_id_element = '';
    var charge_amt = 0;
    var shipping_id = '';

    if (page == 'cart') {
        cart_id_element = $(cart_element).attr('id');
        cart_id = cart_id_element.split('-')[1];

        var is_radio_clicked = $('input[type=radio]:checked').length > 0 ? true : false;
        if (is_radio_clicked) {
            shipping_id = $('input[name="shipping"]:checked').val();
            var shipping_charges = $('#shipping_charges-' + shipping_id).text();
            charge_amt = shipping_charges.replace('₹', '')
        }
    }

    $.ajax({
        type: "POST",
        url: "/update-quantity-cart",
        data: {
            cart_id: cart_id,
            quantity: quantity,
            shipping_id: shipping_id
        },
        headers: {
            'X-CSRF-Token': token
        },
        success: function(response) {
            if (page == 'cart') {
                var all_cart_items = response.data.all_items;
                var total = 0;
                all_cart_items.forEach(element => {
                    if (element.id == cart_id) {
                        $('#item_price-' + element.id).text('₹' + element.product.sale_price);
                        $('#item_total-' + element.id).text('₹' + element.product.sale_price * response.data.quantity);
                    }
                    total += element.product.sale_price * element.quantity;
                })

                var total = total + parseFloat(charge_amt);
                $('#subtotal').text('₹' + total);
                $('#total').text('₹' + total);
            }

            $('.cart-count').text(response.data.all_items.length);
        }
    })
}


function submitCheckout() {
    var form = $('#checkout-form');
    var form_data = form.serialize();

    form.find('.is-invalid').removeClass('is-invalid');

    $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: form_data,
        dataType: 'JSON',
        success: function(response) {
            if (response.success == true) {
                $('.checkout').hide();
                $('#checkout_success').show();
            }
        },
        error: function(response) {
            // $('.spinner-border').addClass('d-none');

            $.each(response.responseJSON.errors, function(key, value) {
                $('#' + key).removeClass('border-0').addClass('is-invalid');
            })
        }
    });
}


$('input').on('input', function() {
    $(this).removeClass('is-invalid');

    if ($(this).val().length > 1) {
        if ($(this).attr('id') == 'email') {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!re.test($(this).val())) {
                $(this).addClass('is-invalid');
            }
        }
        $(this).addClass('is-valid');
    }
});


function getcheckSubCategories(check_ele) {

    if ($(check_ele).is(':checked')) {
        sub_categories_arry.push($(check_ele).val());
    } else {
        var index = sub_categories_arry.indexOf($(check_ele).val());
        if (index > -1) {
            sub_categories_arry.splice(index, 1);
        }
    }

    fetchProduct();
}

/**
 * Fetch products based on current filters
 *
 * This function is currently empty
 */
function fetchProduct() {
    var urlParams = new URL(window.location.href);
    var pathname = urlParams.pathname;

    $.ajax({
        type: "GET",
        url: pathname,
        data: {
            sub_categories: sub_categories_arry
        },
        headers: {
            'X-CSRF-Token': token
        },
        success: function(response) {
            $('#products').html('');
            $('#products').html(response);
            console.log(response);
        }
    });
}



$('.sidebar-filter-clear').click(function() {
    sub_categories_arry = [];
    $.each(sub_categories_arry, function(key, value) {
        $('#sub_category-' + value).prop('checked', false);
    })
    fetchProduct();
});


function applyCoupon()
{
    var coupon_id = $('#coupon_code').val();
    $.ajax({
        url: "/check-coupan/" + coupon_id,
        type: "GET",
        data: {
            coupan_code: coupon_id
        },
        success: function (data) {

            if(data.status == 200){
                if(data.data != ''){
                    $('#tr_coupan_code_apply').removeClass('d-none');

                    toastr['success']('', 'Coupon Applied Successfully', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                    $('#coupon_code').addClass('valid');

                    var total = parseFloat($('#total').text().replace('₹', ''));
                    var coupon_value = parseFloat(data.data.value);
                    var coupon_amount = 0;
                    var grand_total = 0;

                    if(data.data.type == 'percentage'){
                        grand_total = total - (total * coupon_value / 100);
                        coupon_amount = total * coupon_value / 100;
                    }
                    else{
                        grand_total = total - coupon_value;
                        coupon_amount = coupon_value;
                    }
                    $('#total').text('₹' + grand_total);

                    $('#total').text('₹' + grand_total);

                    $('#coupan_code_apply').text(data.data.code);
                    $('#coupan_value_discount').text('(-) ₹' + coupon_amount);

                    $('#coupon_code').attr('readonly', true);
                }
                else{
                    $('#coupon_code').addClass('is-invalid');
                    toastr['error']('', data.message, {
                        closeButton: true,
                        tapToDismiss: false
                    })
                }
            }
        },
        error: function (data) {
            $('#coupon_code').addClass('is-invalid');
            toastr['error']('', data.message, {
                closeButton: true,
                tapToDismiss: false
            })
        }
    })
}
