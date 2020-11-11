@extends('layout')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2 style="color: blue;">Đăng nhập tài khoản của bạn</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}	
						<input type="text" name="email_account" placeholder="Tên tài khoản" />
							<input type="password" name="password_account" placeholder="Mật khẩu" />
							<span>
								<input type="checkbox" class="checkbox"> 
								nhớ mật khẩu
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2  style="color: blue;">Đăng kí tài khoản mới</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
                            {{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên"/>
							<input type="email" name="customer_email" placeholder="Email"/>
							<input type="password" name="customer_password"  placeholder="Mật khẩu"/>
							<input type="text"  name="customer_phone" placeholder="Điện thoại"/>
							<button type="submit"  class="btn btn-default">Đăng kí</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection
