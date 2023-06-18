<script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{ asset('backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('backend') }}/assets/js/index.js"></script>
	<!--app JS-->
	<script src="{{ asset('backend') }}/assets/js/app.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforcategory.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforsubcategory.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforpractice.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforrakib.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforcategorya.js"></script>
	<script src="{{ asset('backend') }}/assets/js/ajaxforoffice.js"></script>
	<script>
		//show data from fake api
                    jQuery(document).ready(function(){
                        jQuery(document).on("click",".click",function(){
                            jQuery.ajax({
								url: "https://dummyjson.com/products",
								type: "get",
								success: function(res){
									var all = "";
									jQuery.each(res.products, function(key, val) {
										all += '<tr>\
										<td>'+val.id+'</td>\
										<td>'+val.title+'</td>\
										<td>'+val.description+'</td>\
										<td>'+val.price+'</td>\
										<td>'+val.discountPercentage+'</td>\
										<td>'+val.stock+'</td>\
										<td>'+val.rating+'</td>\
										<td>'+val.brand+'</td>\
										<td>'+val.category+'</td>\
										<td> <img height="100" width="100" src="' +val.thumbnail+ '" alt=""> </td>\
										<td> <img height="100" width="100" src="' +val.images+ '" alt=""> </td>\
										</tr>';

									});
									jQuery(".apidata").html(all);
								}
								
							});
                        });

                // show data in form

						jQuery(document).on("click",".clicktoadd",function(){
							jQuery.ajax({
								url: "https://dummyjson.com/product/2",
								type: "get",
								success: function(res){
									jQuery(".product").val(res.title);
									jQuery(".price").val(res.price);
									jQuery(".description").val(res.description);
									jQuery(".brand").val(res.brand);
									jQuery(".category").val(res.category);
								}
							})

						});

						//  save data in my database

						jQuery(document).on("click",".submit-btn", function(){
							var product = jQuery(".product").val();
							var price = jQuery(".price").val();
							var des = jQuery(".description").val();
							var brand = jQuery(".brand").val();
							var category = jQuery(".category").val();
                            
							  $.ajaxSetup({
                                 headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  }
                              });

							  jQuery.ajax({
								url: "/insertapitest",
								type: "post",
								data: {
									product:product,
									price:price,
									description:des,
									brand:brand,
									category:category

								},
								success: function(res){
									alert(res.msg);

								}
							  });
						});

						
                    })
                </script>