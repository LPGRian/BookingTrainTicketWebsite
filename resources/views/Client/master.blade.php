<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('vendor/datepicker/css/gijgo.min.css')}}" type="text/css">
    @section('css')
    @show
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <a class="navbar-brand" href="#" >
          <img src="{{url('assets/train-logo.PNG')}}" alt="" style="width: auto; height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Tìm vé <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Thông tin đặt chỗ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kiểm tra vé</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Khuyến mãi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Các quy định</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hướng dẫn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
            
        </div>
    </nav>

      <div  class="content-parent">
        <div class="content-child">
	        @section('content')
					@show
        	<div class="footer"> 
            <div class="footer-child">
              <div class="text-title">
                Liên hệ với chúng tôi <br> <br>
                <div class="grid-container">
                  <div><img src="{{url('assets/fbIcon.png')}}" alt="" style="width: 40px; height: 40px;"></div>
                  <div><img src="{{url('assets/igIcon.png')}}" alt="" style="width: 40px; height: 40px;"></div>
                  <div><img src="{{url('assets/callIcon.png')}}" alt="" style="width: 40px; height: 40px;">
                    Bán vé & CSKH: 19000109
                  </div>
                </div>
                
              </div> <br>
              <hr style="border-color: white;">
              <div class="text-copyright">
                Copyright © 2019 LPG Train   |   All Rights Reserved.   |   All individual works are copyright protected by their respective owners & contributors.
                LPG Train is handcrafted from around the world
               
              </div>
              
            </div> 
          </div>
        </div>
      </div>

    
    
    <script src="{{url('js/73121307f8.js')}}" ></script>
    <script src="{{url('js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{url('js/jquery-3.4.1.js')}}" ></script>
    <script src="{{url('js/popper.min.js')}}" ></script>
    <script src="{{url('js/bootstrap.min.js')}}" ></script>
    <script src="{{url('vendor/datepicker/js/gijgo.min.js')}}" type="text/javascript"></script>
    @section('js')
    @show
  </body>
</html>
