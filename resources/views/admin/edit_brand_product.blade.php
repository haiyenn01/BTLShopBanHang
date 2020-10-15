@extends('admin_layout')
@section('admin_content')
<div style="text-align:center;">
    <h1> Cập nhập thương hiệu sản phẩm</h1>
    
</div>
<?php
			$message = Session::get('message');
			if($message){
				echo '<span style="color:green;">'. $message.'</span>';
				Session::put('message',null);
			}
            ?>
@foreach($edit_brand_product as $key =>$edit_value)
<form action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
{{ csrf_field() }}

  <div class="form-group">
    <label for="">Tên danh mục</label>
    <input type="text" value='{{$edit_value->brand_name}}' class="form-control"  name="brand_product_name">
  </div>
  
  <div class="form-group">
    <label for="">Mô tả</label>
    <textarea class="form-control"   name="brand_product_desc" rows="3">{{$edit_value->brand_desc}}</textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Cập nhập thương hiệu </button>
</form>
@endforeach
@endsection
