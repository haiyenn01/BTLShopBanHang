@extends('admin_layout')
@section('admin_content')
<div style="text-align:center;">
    <h1> Cập nhập danh mục sản phẩm</h1>
    
</div>
<?php
			$message = Session::get('message');
			if($message){
				echo '<span style="color:green;">'. $message.'</span>';
				Session::put('message',null);
			}
?>
@foreach($edit_category_product as $key =>$edit_value)
<form action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
{{ csrf_field() }}

  <div class="form-group">
    <label for="">Tên danh mục</label>
    <input type="text" value='{{$edit_value->category_name}}' class="form-control"  name="category_product_name" >
  </div>
  
  <div class="form-group">
    <label for="">Mô tả</label>
    <textarea class="form-control" name="category_product_desc" rows="3">{{$edit_value->category_desc}}</textarea>
  </div>

  
  <button type="submit" class="btn btn-primary">Cập nhập danh mục</button>
</form>
@endforeach
@endsection
