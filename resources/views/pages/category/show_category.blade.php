@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        @foreach($category_name as $key => $name)
						<h2 class="title text-center"> {{$name->category_name}} </h2>
                        @endforeach
                        @foreach($category_by_id as $key =>$product )
                         <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/upload/product/'.$product->product_image)}}" alt="" />
											<h2>{{number_format($product->product_price).' '.'VND'}}</h2>
											<p>{{$product->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
										</div>
								</div>
							</div>
						</div>
                        </a>
                       @endforeach
					</div>
					{{ $category_by_id->links('vendor.pagination.default') }}
@endsection
