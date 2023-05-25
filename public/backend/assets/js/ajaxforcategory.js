jQuery(document).ready(function() {
    jQuery(document).on("click", ".category-add", function() {


        var name = jQuery('.category-name').val();
        var des = jQuery('.category-des').val();
        var price = jQuery('.category-price').val();
        var quantity = jQuery('.category-quantity').val();
        var status = jQuery('.category-status').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/insertcategory",
            type: "POST",
            data: {
                name: name,
                des: des,
                price: price,
                quantity: quantity,
                status: status
            },
            success: function(res) {
                alert(res.msg);
                show();
            }

        });

    });

    show();

    function show() {
        jQuery.ajax({
            url: '/showcategory',
            type: "GET",
            dataType: "json",
            success: function(res) {
                var alldata = "";
                jQuery.each(res.alldata, function(key, val) {
                    var status = "";
                    if (val.status == "1") {
                        status = '<button value="' + val.id + '" class="btn cat-active btn-info btn-sm">Active</button>';
                    } else {
                        status = '<button value="' + val.id + '" class="btn cat-inactive btn-warning btn-sm">Inactive</button>';
                    }
                    alldata += '<tr> \
                                    <td> ' + val.name + ' </td>\
                                    <td> ' + val.des + ' </td>\
                                    <td> ' + val.price + ' </td>\
                                    <td> ' + val.quantity + ' </td>\
                                    <td> ' + status + ' </td>\
                                    <td> <button value="' + val.id + '" class="btn cat-edit btn-info btn-sm">Edit</button>\
                                     <button value="' + val.id + '" class="btn cat-delete btn-danger btn-sm">Delete</button>\
                                     </td>\
                                    </tr> ';
                });
                jQuery('.alldata').html(alldata);

            }
        })

    }

    jQuery(document).on("click", ".cat-delete", function() {
        var id = jQuery(this).val();
        jQuery.ajax({

            url: "/deletecategory/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    });

    jQuery(document).on("click", ".cat-active", function() {
        var id = jQuery(this).val();

        jQuery.ajax({
            url: "/activecategory/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    });
    jQuery(document).on("click", ".cat-inactive", function() {
        var id = jQuery(this).val();

        jQuery.ajax({
            url: "/inactivecategory/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".cat-edit", function() {
        var id = jQuery(this).val();
        jQuery(".category-add").hide();
        jQuery(".category-update").show();

        jQuery.ajax({
            url: "/editcategory/" + id,
            type: "GET",
            success: function(res) {

                jQuery(".category-name").val(res.alldata.name);
                jQuery(".category-des").val(res.alldata.des);
                jQuery(".category-price").val(res.alldata.price);
                jQuery(".category-quantity").val(res.alldata.quantity);
                jQuery(".category-status").val(res.alldata.status);
                jQuery(".category-update").val(res.alldata.id);
            }
        })
    });

    jQuery(document).on("click", ".category-update", function() {
        var id = jQuery(this).val();

        var name = jQuery('.category-name').val();
        var des = jQuery('.category-des').val();
        var price = jQuery('.category-price').val();
        var quantity = jQuery('.category-quantity').val();
        var status = jQuery('.category-status').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/updatecategory/" + id,
            type: "POST",
            data: {
                name: name,
                des: des,
                price: price,
                quantity: quantity,
                status: status
            },
            success: function(res) {
                alert(res.msg);
                show();
            }

        });

    });


})