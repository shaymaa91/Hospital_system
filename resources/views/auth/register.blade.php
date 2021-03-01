



            <!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Login Page - 2</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="http:://http://127.0.0.1:8000/https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js')}}"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{asset('/metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{asset('/metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="{{asset('/metronic/assets/demo/default/media/img/logo/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
   
	
	<!-- begin::Body -->
 
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->

<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"  style="background-image: url({{asset('/metronic/assets/app/media/img//bg/bg-1.jpg')}});">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
        
                <div class="m-login__logo">
                    <a href="#">
                    <img src="{{asset('/metronic/assets/app/media/img/logos/logo-1.png')}}">
                    </a>
                </div>
      
            
                <div class="m-login__signin">
                <h3 class="m-login__title text-center"  >إنشاء حساب جديد</h3>
                        
                    <form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="text" id="name" value="{{old('name')}}" placeholder="الاسم بالكامل"
            name="name" autocomplete="on" required autofocus>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="email" id="email" placeholder="البريد الالكتروني"
            value="{{old('email')}}" name="email" autocomplete="on" required>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="password" placeholder="كلمة المرور" name="password" id="password"
            required>
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input m-login__form-input--last" type="password" placeholder="تأكيد كلمة المرور"
            id="password_confirmation" name="password_confirmation" required>
    </div>


    <div class="m-login__form-action">
        <button id="" type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" href="{{ asset('login') }}">تسجيل
            مستخدم جديد</button>&nbsp;&nbsp;
        <button id="m_login_signup_cancel"
            class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">إلغاء الأمر</button>

    </div>
    <div class="row m-login__form-sub">
        <div class="col m--align-center m-login__form-right">
            <a href="{{ route('login') }}" id="m_login_forget_password" class="m-link">لديك حساب بالفعل؟</a>

        </div>
    </div>
</form>
               
               
            </div>
        </div>
    </div>
    
</div>
         
      
		<!-- end:: Page -->
	<!--begin::Global Theme Bundle -->
    <script src="{{asset('/metronic/assets/vendors/base/vendors.bundle.js')}}" ></script>
		<script src="{{asset('/metronic/assets/demo/default/base/scripts.bundle.js')}}" ></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{asset('/metronic/assets/snippets/custom/pages/user/login.js')}}" ></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>


	

            
       
   
