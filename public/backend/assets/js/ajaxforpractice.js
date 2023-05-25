jQuery(document).ready(function() {
    jQuery(document).on("click", ".practice-add", function() {
        var name = jQuery('.practice-name').val();
        var des = jQuery('.practice-des').val();
        var price = jQuery('.practice-price').val();
        var quantity = jQuery('.practice-quantity').val();
        var status = jQuery('.practice-status').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/insertpractice",
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
            url: "/showpractice",
            type: "GET",
            dataType: "json",
            success: function(res) {
                var alldata = "";
                var sl = 1;

                jQuery.each(res.alldata, function(key, val) {
                    var status = "";
                    if (val.status == "1") {
                        status = '<button value="' + val.id + '" class="btn btn-info active-btn">Active</button>';

                    } else {
                        status = '<button value="' + val.id + '" class="btn btn-danger inactive-btn">Inactive</button>';
                    }
                    alldata += '<tr>\
                    <td>' + sl + '</td>\
                    <td>' + val.name + '</td>\
                    <td>' + val.des + '</td>\
                    <td>' + val.price + '</td>\
                    <td>' + val.quantity + '</td>\
                    <td>' + status + '</td>\
                    <td> <button value="' + val.id + '" class="btn edit-btn btn-success">Edit</button> \
                         <button value="' + val.id + '" class="btn delete-btn  btn-danger">Delete</button> \
                    </td>\
                    </tr>';
                    sl++;

                });
                jQuery(".alldata-practice").html(alldata);
            }
        })
    }

    jQuery(document).on("click", ".active-btn", function() {
        var id = jQuery(this).val();

        jQuery.ajax({
            url: "/activepractice/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".inactive-btn", function() {
        var id = jQuery(this).val();

        jQuery.ajax({
            url: "/inactivepractice/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".delete-btn", function() {
        var id = jQuery(this).val();

        jQuery.ajax({
            url: "/deletepractice/" + id,
            type: "GET",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".edit-btn", function() {
        var id = jQuery(this).val();
        jQuery(".practice-add").hide();
        jQuery(".practice-update").show();

        jQuery.ajax({
            url: "/editpractice/" + id,
            type: "GET",
            success: function(res) {
                jQuery(".practice-name").val(res.alldata.name);
                jQuery(".practice-des").val(res.alldata.des);
                jQuery(".practice-price").val(res.alldata.price);
                jQuery(".practice-quantity").val(res.alldata.quantity);
                jQuery(".practice-status").val(res.alldata.status);
                jQuery(".practice-update").val(res.alldata.id);


            }
        })
    })

    jQuery(document).on("click", ".practice-update", function() {
        var id = jQuery(this).val();
        var name = jQuery(".practice-name").val();
        var des = jQuery(".practice-des").val();
        var price = jQuery(".practice-price").val();
        var quantity = jQuery(".practice-quantity").val();
        var status = jQuery(".practice-status").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/updatepractice/" + id,
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