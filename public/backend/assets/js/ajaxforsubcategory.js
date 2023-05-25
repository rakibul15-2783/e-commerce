jQuery(document).ready(function() {
    jQuery(document).on("click", ".subcategory-add", function() {
        var name = jQuery('.subcategory-name').val();
        var price = jQuery('.subcategory-price').val();
        var status = jQuery('.subcategory-status').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "/insertsubcategory",
            type: "POST",
            data: {
                name: name,
                price: price,
                status: status,
            },
            success: function(res) {
                alert(res.msg);
            }
        });

    });

});