@extends('layout')
@section('content')

@foreach($product_details as $key => $value)
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <ul id="imageGallery">
                @foreach($gallery as $key =>$gal)
                <li data-thumb="{{URL::to('public/upload/gallery/'.$gal->gallery_image)}}"
                    data-src="{{URL::to('public/upload/gallery/'.$gal->gallery_image)}}">
                    <img src="{{URL::to('public/upload/gallery/'.$gal->gallery_image)}}" />
                </li>
                @endforeach
            </ul>

        </div>

    </div>

    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="{{URL::to('public/upload/product/images/'.$value->product_image)}}" class="newarrival" alt="" />
            <h2>{{$value->product_name}}</h2>
            <img src="{{URL::to('public/upload/product/images/'.$value->product_image)}}" alt="" />
            <form action="{{URL::to('/save-cart')}}" method="POST">
                {{csrf_field()}}
                <span>
                    <span>{{number_format($value->product_price).' '.'VND'}}</span>
                    <label>Số lượng :</label>
                    <input name="qty" type="number" min="1" value="1" />
                    <input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />

                    <button type="submit" class="btn btn-fefault cart" style="background-color: #FE980F;">
                        <i class="fa fa-shopping-cart"></i>
                        Thêm giỏ hàng
                    </button>
                </span>
            </form>
            <p><b>Tình trạng :</b> Còn hàng</p>
            <p><b>Điều kiện :</b> Mới 100%</p>
            <p><b>Thương hiệu :</b> {{$value->brand_name}}</p>
            <p><b>Danh mục :</b> {{$value->category_name}}</p>
            <a href=""><img src="{{URL::to('public/upload/product/images/share.png')}}" width="150" height="250"
                    class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
</div>
<!--/product-details-->



<div class="category-tab shop-details-tab">
    <!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm </a></li>
            <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="details">
            <div class="col-sm-3">
                <p>{!!$value->product_desc!!}</p>
            </div>
        </div>

        <div class="tab-pane fade" id="companyprofile">
            <div class="col-sm-3">
                <p>{!!$value->product_content!!}</p>
            </div>
        </div>
    </div>
</div>
<!--/category-tab-->
@endforeach



<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Sản phẩm liên quan</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @foreach($relate as $key =>$lienquan)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('public/upload/product/'.$lienquan->product_image)}}" alt="" />
                                    <h2>{{number_format($lienquan->product_price).' '.'VND'}}</h2>
                                    <p>{{$lienquan->product_name}}</p>
                                    <a href="#" style="background-color: #FE980F;"
                                        class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ
                                        hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--/recommended_items-->
{{ $relate->links('vendor.pagination.default') }}

@endsection