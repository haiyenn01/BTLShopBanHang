@extends('admin_layout')
@section('admin_content')

 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                            Thêm sản phẩm
            </header>
            <div class="panel-body">
                    <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert" style="font-size: 16px;
                    color: #e81414;width: 100%;
                    text-align:center;">'.$message,'</span>' ;
                    Session::put('message',null);
                }
            ?>
                        <div class="position-center">
                            <form  action="{{URL::to('/save-product')}}" method="post" enctype='multipart/form-data'>
                            {{csrf_field()}}   
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                <label >Danh mục sản phẩm </label>
                                <select name="product_cate" class="form-control input-lg m-bot15">
                                 @foreach($cate_product as $key => $cate) 
                                       <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                <label >Thương hiệu</label>
                                <select name="product_brand" class="form-control input-lg m-bot15">
                                @foreach($brand_product as $key => $brand) 
                                    <option value="{{$brand->brand_id}} ">{{$brand->brand_name}} </option>
                                @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text" name="product_price" class="form-control"  placeholder="giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea  style="resize: none" rows="5" class="form-control" name="product_desc" placeholder="Mô tả sản phẩm "></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung sản phẩm</label>
                                    <textarea  style="resize: none" rows="5" class="form-control" name="product_content" placeholder="nội dung sản phẩm "></textarea>
                                </div>
                                <div class="form-group">
                                <label >Hiển thị </label>
                                <select name="product_status" class="form-control input-lg m-bot15">
                                    <option value="0">Hiển thị </option>
                                    <option value="1">Ẩn </option>
                                </select>
                                </div>
                                <button type="submit" name="add_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>
                </div>
        </section>

    </div>
</div>
@endsection
