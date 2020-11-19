<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
use Cart;
use App\Models\Coupon;
session_start();

class CartController extends Controller
{
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon1 = Coupon::where('coupon_code',$data['coupon1'])->first();
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();

        if($coupon1){
            $count_coupon1 = $coupon1->count();
            if($count_coupon1>0){
                $coupon_session1 = Session::get('coupon');
                if($coupon_session1==true){
                    $is_avaiable1 = 0;
                    if($is_avaiable1==0){
                        $cou1[] = array(
                            'coupon_code' => $coupon1->coupon_code,
                            'coupon_condition' => $coupon1->coupon_condition,
                            'coupon_number' => $coupon1->coupon_number,
                        );
                        Session::put('coupon1',$cou1);
                    }
                }else{
                    $cou1[] = array(
                        'coupon_code' => $coupon1->coupon_code,
                        'coupon_condition' => $coupon1->coupon_condition,
                        'coupon_number' => $coupon1->coupon_number,
                    );
                    Session::put('coupon1',$cou1);
                }
                Session::save();
            }

        }
         if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                    Session::put('coupon',$cou);
                }
                Session::save();
                return redirect()->back()->with('message','Thêm mã giảm giá thành công');
            }

        }else{
            return redirect()->back()->with('error','Mã giảm giá không đúng');
        }
    }

    public function save_cart(Request $request){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
        //Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $data['id']=$product_info->product_id;    
        $data['qty']=$quantity;    
        $data['name']=$product_info->product_name;    
        $data['weight']='123';    
        $data['price']=$product_info->product_price;    
        $data['options']['image']=$product_info->product_image;
        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }

    public function increase_cart($rowId){
      Cart::update($rowId, Cart::get($rowId)->qty + 1);
      return Redirect::to('/show-cart');
     }

     public function reduce_cart($rowId){
      Cart::update($rowId, Cart::get($rowId)->qty - 1);
      return Redirect::to('/show-cart');
     }
}