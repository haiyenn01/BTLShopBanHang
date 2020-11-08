@extends('layout')
@section('content')
    <div class="features_items">
		<h2 class="title text-center">Kết quả tìm kiếm</h2>
		 @foreach($search_product as $key =>$product )
			<a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
							<h2>{{number_format($product->product_price).' '.'VND'}}</h2>
							<p>{{$product->product_name}}</p>
							<button type="submit" class="btn btn-fefault cart">
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
