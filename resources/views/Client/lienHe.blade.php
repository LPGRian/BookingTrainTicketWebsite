@extends('client.master')

@section('title')
LienHe
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/lienHe.css')}}" type="text/css">
@stop
 
@section('js')


@stop

@section('content')
<div  class="content-parent">
  <div class="content-child">
    <img  src="{{url('assets/train.png')}}" alt="" style="width: 100%; height: auto;">
    <div class="col-md-12">
      <br>
      <h2>Thông tin liên hệ</h2>
      <br>
      <div class="row row-custom">
          <div class="col-sm-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title card-title-custom">Công ty LPG Train Việt Nam</h5>
                      <p class="card-text">
                          <i class="fas fa-map-marker-alt"></i>
                          Số 29, Tân Lập, Đông Hòa, Dĩ An, Bình Dương
                          <br>
                          <i class="fas fa-phone-square-alt"></i>
                          Điện thoại: 19000109
                          <br>
                          <i class="far fa-envelope"></i>
                          Email: lpgtraincontact@gmail.com
                          <br>
                          <br>

                      </p>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title card-title-custom">Tổng đài hỗ trợ khách hàng</h5>
                      <p class="card-text">
                          <i class="fas fa-phone-square-alt"></i>
                          Khu vực miền Bắc: 19000904
                          <br>
                          <i class="fas fa-phone-square-alt"></i>
                          Khu vực miền Nam: 19000109
                          <br>
                          <i class="far fa-envelope"></i>
                          Email: lpgtrainsupport@gmail.com
                          <br>
                          <br>
                      </p>
                  </div>
              </div>
          </div>
        </div>
    </div> 
  </div>
</div>
@stop