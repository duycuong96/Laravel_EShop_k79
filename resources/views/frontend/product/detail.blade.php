@extends('frontend.master.master')
@section('title','chi tiết sản phẩm')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(images/ao-so-mi-trang-kem-asm836-8193.jpg);">

										</div>

									</div>
								</div>
								<div class="col-md-7">
									<form action="product/AddCart" method="post">

										<div class="desc">
											<h3>Áo Sơ Mi Trắng Kem ASM844</h3>
											<p class="price">
												<span>150,000 đ</span>
											</p>
											<p>thông tin</p>
											<p style="text-align: justify;">
												VIETPRO STORE sẽ giao hàng tận nơi khi chọn mua sản phẩm: Áo Sơ Mi Trắng Kem ASM844. Hoặc quí khách có thể đến tại địa chỉ shop có hiển thị bên dưới, khi chọn size phù hợp để xem và thử trực tiếp.

											</p>
										
									
											<div class="row row-pb-sm">
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
																<i class="icon-minus2"></i>
															</button>
														</span>
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
																<i class="icon-plus2"></i>
															</button>
														</span>
													</div>
												</div>
											</div>
											<input type="hidden" name="id_product" value="1">
											<p><button class="btn btn-primary btn-addtocart" type="submit"> Thêm vào giỏ hàng</button></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										Đây là sản phẩm đẹp
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm Mới</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/quan-kaki-xanh-den-qk171-9771.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Quần kaki xanh đen</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-so-mi-trang-kem-asm836-8193.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo trắng kẻ vằn</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/6ds19c007.jpg);">

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo nữ trắng bạch</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-nu-so-mi-co-co-duc.jpg);">

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo sơ mi có cổ kẻ ô xám</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end main -->
@stop

@section('script')
@parent
<script>
	var quantity=1;
	$('.quantity-right-plus').click(function () {
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);
	});

	$('.quantity-left-minus').click(function (e) {
		var quantity = parseInt($('#quantity').val());
			if (quantity > 1) {
				$('#quantity').val(quantity - 1);
			}
	});
</script>
@stop
	