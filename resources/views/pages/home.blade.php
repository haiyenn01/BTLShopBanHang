@extends('layout')
@section('content')
    <div class="features_items">
		<h2 class="title text-center">Sản phẩm mới nhất</h2>
		@foreach($all_product as $key =>$product )
			<a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
			<div class="col-sm-4" style="width:30% !important;">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{URL::to('public/upload/product/'.$product->product_image)}}" height="250" alt="" />
							<h2>{{number_format($product->product_price).' '.'VND'}}</h2>
							<p>{{$product->product_name}}</p>
							<button type="submit" class="btn btn-fefault cart" style="background-color: #FE980F;>
										<i class="fa fa-shopping-cart"></i>
										Thêm giỏ hàng
							</button>
						</div>
					</div>
				</div>
			</div>
			</a>
        @endforeach
    </div>
@endsection
