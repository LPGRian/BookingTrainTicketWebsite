@extends('client.master')

@section('title')
DatVe
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/chonChoNgoi.css')}}" type="text/css">
@stop
 
@section('js')


@stop

@section('content')
<div  class="content-parent">
  <div class="content-child">
    <br>
    <div class="alert alert-primary col-md-12 alert-custom-code" role="alert">
      <h4><strong>Chiều đi:</strong>ngày 25/12/2019 tuyến Sài Gòn - Nha Trang</h4>
    </div>
    <br>
    <div class="row">
      <div class="col-md-9">
        <b><h5 style="padding-left: 15px;">Chọn tàu</h5></b>
        <div class="form-row">
          <div class="cart c-custom">
            <div class="card-header c-h-custom">
              <h5>SE8</h5>
            </div>
            <div class="card-body c-b-custom">
              TG đi:
              <br>
              TG đến: 25/12 06:00
              <br>
              SL chỗ trống:
            </div>
            <div class="card-footer form-row">
              <span class="rounded-circle"></span>
              <span class="rounded-circle"></span>
            </div>
          </div>
          &nbsp;&nbsp;
          <div class="cart c-custom">
            <div class="card-header c-h-custom">
              <h5>SE8</h5>
            </div>
            <div class="card-body c-b-custom">
              TG đi:
              <br>
              TG đến: 25/12 06:00
              <br>
              SL chỗ trống:
            </div>
            <div class="card-footer form-row">
              <span class="rounded-circle"></span>
              <span class="rounded-circle"></span>
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="col-md-12 form-group">
          <label for="toa"><b><h5>Chọn toa:</h5></b></label>
          <select class="form-control" id="toa" name="chon-toa">
            <option>Toa 1 | Ngồi mềm điều hòa(A56LV)</option>
            <option>Toa 2 | Giường nằm khoang 6 điều hòa (VIP) (BnBL42)</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <b><h5 style="padding-left: 15px;">Chọn ghế</h5></b>
        <div class="ex1 form-row">
          <div class="col-custom">
            <div class="col-child-custom">
              44
            </div>
            <div class="col-child-custom">
              44
            </div>
            <div class="col-child-custom">
              44
            </div>
            <div class="col-child-custom">
              44
            </div>
          </div> 
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header cd-custom">
            <strong><h4>Giỏ vé</h4></strong>
          </div>
          <div class="card-body">
            <b>Chiều đi</b>
            <br>
            <form>
              <div id="emty-info"></div>
              <div class="form-row" id="info-ticket">
                <div class="col-md-10">
                  <h6><small>
                    SE108<br>
                    Sài Gòn - Nha Trang<br>
                    25/12/2019 06:00<br>
                    NCL toa 1 ghế 69<br>                  
                  </small></h6>
                </div>
                <div class="col-md-2">
                  <i class="fas fa-trash-alt"></i>
                </div>
              </div>
              <a class="btn btn-custom" href="{{url('/thanhToan')}}">Mua vé</a>
            </form>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header cd-custom">
            <strong><h4>Thông tin hành trình</h4></strong>
          </div>
          <div class="card-body">
            <div class="form-group" >
              <label for="gd">Ga đến:</label>
              <input type="text" class="form-control" id="gd" name="gd"disabled>  
            </div>
            <div class="form-group">
              <label for="gdi">Ga đi:</label>
              <input type="text" class="form-control" id="gdi" name="gdi" disabled>
            </div>
            <div class="row" style="margin-left: auto;">
              <div class="form-group form-check-inline ">
                <label class="form-check-label" for="mc">
                  <input type="radio" class="form-check-input" id="mc" name="motchieu" value="option1" checked disabled>Một chiều
                </label>
              </div>
              <div class="form-group form-check ">
                <label class="form-check-label" for="kh">
                  <input type="radio" class="form-check-input" id="kh" name="khuhoi" value="option2" disabled>Khứ hồi
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="nd">Ngày đi:</label>
              <input type="text" class="form-control" id="nd" disabled>
            </div>
            <div class="form-group">
              <label for="nv">Ngày về:</label>
              <input type="text" class="form-control" id="nv" disabled>
            </div><br>
            <br>
          </div>
        </div>
      </div>
    </div>
</div>
@stop