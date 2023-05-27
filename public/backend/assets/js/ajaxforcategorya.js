jQuery(document).ready(function() {
    jQuery(document).on("click", ".categorya-btn-add", function() {
        var name = jQuery(".categorya-name").val();
        var des = jQuery(".categorya-des").val();
        var price = jQuery(".categorya-price").val();
        var status = jQuery(".categorya-status").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/insertcategorya",
            type: "post",
            data: {
                name: name,
                des: des,
                price: price,
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
            url: "/showcategorya",
            type: "get",
            dataType: "json",
            success: function(res) {
                var alldata = "";
                var status = "";

                jQuery.each(res.alldata, function(key, val) {
                    if (val.status == "1") {
                        status = '<button value="' + val.id + '" class="btn btn-info categorya-active">Active</button>';
                    } else {
                        status = '<button value="' + val.id + '" class="btn btn-warning categorya-inactive">Inctive</button>';
                    }
                    alldata += '<tr>\
                    <td>' + val.name + '</td>\
                    <td>' + val.des + '</td>\
                    <td>' + val.price + '</td>\
                    <td>' + status + '</td>\
                    <td> \
                    <button value="' + val.id + '" class="btn btn-info categorya-edit-btn">Edit</button> \
                    <button value="' + val.id + '" class="btn btn-danger categorya-delete">Delete</button> \
                    </td>\
                    </tr>';
                });
                jQuery(".categorya-alldata").html(alldata);
            }
        })
    }

    jQuery(document).on("click", ".categorya-active", function(res) {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/categoryaactive/" + id,
            type: "get",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })

    jQuery(document).on("click", ".categorya-inactive", function(res) {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/categoryainactive/" + id,
            type: "get",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })
    jQuery(document).on("click", ".categorya-delete", function(res) {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "/categoryadelete/" + id,
            type: "get",
            success: function(res) {
                alert(res.msg);
                show();
            }
        })
    })
    jQuery(document).on("click", ".categorya-edit-btn", function(res) {
        var id = jQuery(this).val();
        jQuery(".categorya-btn-add").hide();
        jQuery(".categorya-btn-update").show();
        jQuery.ajax({
            url: "/categoryaedit/" + id,
            type: "get",
            success: function(res) {
                jQuery(".categorya-name").val(res.data.name);
                jQuery(".categorya-des").val(res.data.des);
                jQuery(".categorya-price").val(res.data.price);
                jQuery(".categorya-status").val(res.data.status);
                jQuery(".categorya-btn-update").val(res.data.id);

            }
        })
    })

    jQuery(document).on("click", ".categorya-btn-update", function() {
        var id = jQuery(this).val();
        var name = jQuery(".categorya-name").val();
        var des = jQuery(".categorya-des").val();
        var price = jQuery(".categorya-price").val();
        var status = jQuery(".categorya-status").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/updatecategorya/" + id,
            type: "post",
            data: {
                name: name,
                des: des,
                price: price,
                status: status
            },
            success: function(res) {
                alert(res.msg);
                show();
            }
        });
    })

})