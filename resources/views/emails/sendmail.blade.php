<!DOCTYPE html>
<html>

<head>
    <title>Send Mail</title>
</head>
<link href="{{asset('/public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">

<style>
table,
td,
th {
    border: 1px solid black;
}

table {
    width: 100%;
    border-collapse: collapse;
}
</style>

<body>
    <div style="border-style: double">
        <div style="padding: 40px">
            <div>
                <h1 style="text-align:center;color:red;">Cảm Ơn quý khách đã chọn mua sản phẩm chúng tôi</h1>
            </div>
            <hr>
            <div>
                <h2>Thông tin chi tiết hóa đơn</h2>
                    <p>Hóa đơn số: HD001</p>
                    <p>Ngày đặt:{{$order['date']}} </p>
            </div>
            <hr>
            <div>
                <h2>Thông tin khách hàng</h2>
                <p>Họ tên khách hàng: <b>{{$order['name']}}</b> </p>
                <p>Địa chỉ: <b>{{$order['address']}}</b> </p>
                <p>Số điện thoại: <b>{{$order['phone']}}</b> </p>
                <p>Ghi chú: <b>{{$order['notes']}}</b></p>
            </div>
            <div class="table-responsive cart_info">
                @foreach($orderDetails as $key => $pro)
                <table style="border: 1px solid">
                    <tr style="border: 1px solid">
                        <th style="border: 1px solid">Tên sản phẩm đã đặt</th>
                        <th style="border: 1px solid">Mã SP</th>
                        <th style="border: 1px solid">Số lượng</th>
                        <th style="border: 1px solid">Giá tiền</th>
                    </tr>
                    <tr style="border: 1px solid">
                        <td style="border: 1px solid">{{$pro->name}}</td>
                        <td style="border: 1px solid">{{($pro->id)}}</td>
                        <td style="border: 1px solid">{{$pro->qty}}</td>
                        <td style="border: 1px solid">{{number_format($pro->price)}}<sup>đ</sup></td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</body>