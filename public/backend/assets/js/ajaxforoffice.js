jQuery(document).ready(function() {
    jQuery(document).on("click", ".office-btn-add", function() {

        var name = jQuery('.office-name').val();
        var des = jQuery('.office-des').val();
        var price = jQuery('.office-price').val();
        var qnt = jQuery('.office-qnt').val();
        var status = jQuery('.office-status').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery.ajax({
            url: "/insertofficeajax",
            type: "post",
            data: {
                name: name,
                des: des,
                price: price,
                qnt: qnt,
                status: status
            },
            success: function(res) {
                alert(res.msg);
            }
        })
    })
})