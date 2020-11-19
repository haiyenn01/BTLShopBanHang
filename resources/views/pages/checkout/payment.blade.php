@extends('layout')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}">Trang chủ </a></li>
                <li class="active">Thanh toán giỏ hàng </li>
            </ol>
        </div>

        <div class="review-payment">
            <h2>Xem lại giỏ hàng</h2>
        </div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif
        <div class="table-responsive cart_info">
            <?php
                    $content = Cart::content();
                ?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Mô tả </td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $thanhtien = [];
                    $tongtien = [];
                    $km1 = 0;
                    $km2 = 0;
                    ?>
                    @foreach($content as $v_content)

                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/upload/product/'.$v_content->options->image)}}"
                                    alt="" width="50" /></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '. 'VND'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity cart_quantity_down"
                                    href="{{URL::to('/reduce-cart/'.$v_content->rowId)}}"> -
                                </a>
                                <input class="cart_quantity_input" type="text" name="quantity"
                                    value="{{$v_content->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity cart_quantity_up"
                                    href="{{URL::to('/increase-cart/'.$v_content->rowId)}}"> +
                                </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal).' '.'VND';
                                ?>

                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i
                                    class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php
                                $b =0 ;
                                $a = ($v_content->price) * ($v_content->qty);
                                $b +=$a;
                                array_push($tongtien, $b);
                    ?>
                    @endforeach
                    <?php
                        $tongtien1 = 0;
                        foreach($tongtien as $tt=> $ttt){
                            $tongtien1 += $ttt;
                        }
                        // echo print_r($tongtien1);
                        // echo print_r("\n".$tongtien1);
                        // echo print_r("\n".$thue);
                    ?>
                </tbody>
            </table>
            <form method="POST" action="{{URL::to('/check-coupon')}}">
                @csrf()
                <input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá theo %"
                    autocomplete="off"><br>
                    <input type="text" class="form-control" name="coupon1" placeholder="Nhập mã giảm giá tien"
                    autocomplete="off"><br>
                <input type="submit" style="background-color: #FE980F;" class="btn btn-default check_coupon"
                    name="check_coupon" value="Tính mã giảm giá">
            </form>

         
            @if(Session::get('coupon') || Session::get('coupon1'))
           
            <!-- @php
            echo print_r(Session::get('coupon1'));
            echo print_r(Session::get('coupon'));
            @endphp -->
          <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Tổng <span> {{ number_format($tongtien1)}} VND</span></li>
                                @foreach(Session::get('coupon') as $key => $cou)
                                @if($cou['coupon_condition']==1)
                                <li>Mã giảm <span>{{$cou['coupon_number']}} %</span></li>
                                <?php
                                    $km1 = $tongtien1*($cou['coupon_number'])/100;
                                ?>
                                @elseif($cou['coupon_condition']==2)
                                <li> Mã giảm <span> {{number_format($cou['coupon_number'],0,',',',')}} VND</span></li>
                                <?php
                                    $km1 = ($cou['coupon_number']);
                                ?>
                                  @endif
                                @endforeach


                                @foreach(Session::get('coupon1') as $key => $cou1)
                                @if($cou1['coupon_condition']==1)
                                <li>Mã giảm <span>{{$cou1['coupon_number']}} %</span></li>
                                <?php
                                    $km2 = $tongtien1*($cou1['coupon_number'])/100;
                                ?>
                                @elseif($cou1['coupon_condition']==2)
                                <li> Mã giảm <span> {{number_format($cou1['coupon_number'],0,',',',')}} VND</span></li>
                                <?php
                                    $km2 = ($cou1['coupon_number']);
                                ?>
                                  @endif
                                @endforeach
                                <?php
                                    $tongtien1 = $tongtien1 - $km1 -$km2;
                                ?>
                                <li>Thành tiền <span>{{number_format($tongtien1)}} VND</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            @endif


        </div>
        <h4>Chọn hình thức thanh tóan</h4> <br><br>
        <form method="POST" action="{{URL::to("/order-place")}}">
            {{csrf_field()}}
            <div class="payment-options">
                <span>
                    <label><input name="payment_option" value="1" type="checkbox"> Thanh toán bằng thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
                </span>
                <span>
                    <label><input name="payment_option" value="3" type="checkbox"> Thanh toán bằng thẻ ghi nợ</label>
                </span>
                <br>
                <input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
            </div>
        </form>
    </div>
</section>
@endsection