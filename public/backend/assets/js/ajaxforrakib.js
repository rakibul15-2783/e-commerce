jQuery(document).ready(function() {
    jQuery(document).on("click", ".rakib-add", function() {
        var name = jQuery(".rakib-name").val();
        var des = jQuery(".rakib-des").val();
        var price = jQuery(".rakib-price").val();
        var quantity = jQuery(".rakib-quantity").val();
        var status = jQuery(".rakib-status").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/insertrakib",
            type: "POST",
            data: {
                'name': name,
                'des': des,
                'price': price,
                'quantity': quantity,
                'status': status
            },
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    show();

    function show() {
        jQuery.ajax({
            url: "/showrakib",
            type: "GET",
            dataType: "json",
            success: function(res) {
                var alldata = "";
                var sl = 1;

                jQuery.each(res.alldata, function(key, val) {
                    var status = "";
                    if (val.status == "1") {
                        status = '<button value="' + val.id + '" class="btn active-btn-rakib btn-success">Active</button>';

                    } else {
                        status = '<button value="' + val.id + '" class="btn inactive-btn-rakib btn-info">Inctive</button>';
                    }
                    alldata += '<tr>\
                    <td> ' + sl + ' </td>\
                    <td> ' + val.name + ' </td>\
                    <td> ' + val.des + ' </td>\
                    <td> ' + val.price + ' </td>\
                    <td> ' + val.quantity + ' </td>\
                    <td> ' + status + ' </td>\
                    <td> <button value="' + val.id + '" class="btn btn-sm edit-btn-rakib btn-info">Edit</button>  \
                    <button value="' + val.id + '" class="btn btn-sm delete-btn-rakib btn-danger">Delete</button>  </td>\
                    </tr>';
                    sl++;

                });
                jQuery('.alldata-rakib').html(alldata);
            }
        })
    }

    jQuery(document).on("click", ".active-btn-rakib", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/activerakib/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })
    jQuery(document).on("click", ".inactive-btn-rakib", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/inactiverakib/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })
    jQuery(document).on("click", ".delete-btn-rakib", function() {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/deleterakib/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".edit-btn-rakib", function() {
        var id = jQuery(this).val();
        jQuery(".rakib-add").hide();
        jQuery(".rakib-update").show();
        jQuery.ajax({
            url: "/editrakib/" + id,
            type: "GET",
            success: function(res) {
                jQuery(".rakib-name").val(res.alldata.name);
                jQuery(".rakib-des").val(res.alldata.des);
                jQuery(".rakib-price").val(res.alldata.price);
                jQuery(".rakib-quantity").val(res.alldata.quantity);
                jQuery(".rakib-status").val(res.alldata.status);
                jQuery(".rakib-update").val(res.alldata.id);
            }
        })
    })

    jQuery(document).on("click", ".rakib-update", function() {
        var id = jQuery(this).val();
        var name = jQuery(".rakib-name").val();
        var des = jQuery(".rakib-des").val();
        var price = jQuery(".rakib-price").val();
        var quantity = jQuery(".rakib-quantity").val();
        var status = jQuery(".rakib-status").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/updaterakib/" + id,
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
        })
    })

})