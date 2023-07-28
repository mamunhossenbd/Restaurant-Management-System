<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
							@if($message = Session::get('status'))
						<div class="form-group">
						<span class="alert alert-danger">{{$message}}</span>
					</div>
					@endif
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h4 class="text-center mb-2">Don't have an account?<a class="btn btn-warning mb-2" href="{{url('/user_register')}}">Signup</a></h4>
					<form action="{{url('post__user_login')}}" class="login-form" method="post" id="logForm">
				{{csrf_field()}}

				@if($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss='alert'>&times;</button>
                <b>{{$message}}</b>
            </div>
        	@endif

        	@if($message = Session::get('warning'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss='alert'>&times;</button>
                <b>{{$message}}</b>
            </div>
        	@endif
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" name="email" placeholder="email address">
		      			
		      		</div>
		      		@if($errors->has('email'))
		      			<span class="alert alert-danger">{{$errors->first('email')}}</span>
		      			@endif
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password">
	          
	            </div>
	                @if($errors->has('password'))
		      			<span class="alert alert-danger">{{$errors->first('password')}}</span>
		      	  @endif
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-3">Login</button>
	            </div>
	            	
	          </form>

	        </div>
	        
				</div>


			</div>
		</div>

	</section>

	<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/popper.js')}}"></script>
  <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

	</body>
</html>

