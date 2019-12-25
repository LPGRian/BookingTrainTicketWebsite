@extends('client.master')

@section('title')
XacNhan
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/xacNhan.css')}}" type="text/css">
@stop
 
@section('js')

@stop

@section('content')<div  class="content-parent">
<div class="content-child">
    <div class="col-md-12">
      <br>
      <h2>Đặt mua vé thành công</h2>
      <br>
      Cảm ơn quý khách đã sử dụng dịch vụ của công ty LPG Train. Qúy khách đã đặt chỗ thành công với thông tin chi tiết dưới đây:
      <br>
      <br>
      <div class="form-row">  
        <div class="alert alert-primary col-md-5" role="alert">
          <h4><b>
            Mã đặt chỗ: 2ADG5W
            <br>
            Mã thanh toán: 102782
          </b></h4>   
        </div>
        <div class="alert alert-danger col-md-12" role="alert">
          -Qúy khách vui lòng cung cấp <strong>mã đặt chỗ</strong> cho nhân viên bán vé tại Ga cùng với <strong>các giấy tờ tùy thân</strong> theo quy định của công ty chúng tôi để <strong>nhận được vé trước khi lên tàu</strong>.
          <br>
          -Qúy khách vui lòng sử dụng <strong>mã thanh toán</strong> phía trên để <strong>thực hiện các giao dịch thanh toán</strong> tại các đại lý ủy quyền của công ty chúng tôi.
        </div>
      </div>
      <br>
      <br>
      <h5><b>Thông tin vé</b></h5>
      <fieldset disabled>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="t-custom">
              <tr>
                <th>Thông tin cá nhân</th>
                <th>Thông tin chỗ</th>
                <th>Giá vé <br>(VND)</th>
                <th>Giảm giá<br>(VND)</th>
                <th>Thành tiền<br>(VND)</th>
                </br>
              </tr>
            </thead>
                    <tbody>
                        <tr>
                          <td>
                            <form>
                              <div class="input-group flex-nowrap">
                                <div class="input-group-prepend ">
                                  <span class="input-group-text i-custom" id="addon-wrapping">Họ tên</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nguyễn Văn A" aria-describedby="addon-wrapping" name="hoten">
                              </div>
                              <br>
                              <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                  <span class="input-group-text i-custom" id="addon-wrapping1">Đối tượng</span>
                                </div>
                                <select class="form-control" aria-describedby="addon-wrapping1" name="sellist1">
                                  <option>Người lớn</option>
                                  <option>Sinh viên</option>
                                  <option>Trẻ em dưới 8 tuổi</option>
                                </select>
                              </div>
                              <br>
                              <div class="input-group flex-nowrap">
                                <div class="input-group-prepend ">
                                  <span class="input-group-text i-custom" id="addon-wrapping2">Số giấy tờ</span>
                                </div>
                                <input type="text" class="form-control" placeholder="CMND/Hộ chiếu/Năm sinh trẻ em" aria-describedby="addon-wrapping2" name="cmnd">
                              </div>
                            </form>
                          </td>
                          <div>
                            <td>
                              SE8
                              <br>
                              Sài Gòn-Nha Trang
                              <br>
                              03/01/2020 06:00
                              <br>
                              Toa 6 chỗ 30
                              <br>
                              Nằm khoang 6 điều hòa T3
                            </td>
                            <td class="a-custom">500,000</td>
                            <td class="a-custom">50,000</td>
                            <td class="a-custom">450,000</td> 
                          </div>
                        </tr>
                    </tbody>
          </table>
        </div>
        <br><br>
        <h5><b>Thông tin người đặt vé</b></h5>
        <br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Họ tên:</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name">
          </div>
          <div class="form-group col-md-6">
            <label for="cmnd">Số CMND/ Hộ chiếu:</label>
            <input type="text" class="form-control" id="cmnd" placeholder="Nhập CMND/hộ chiếu" name="cmnd">
          </div>
          <div class="form-group col-md-6">
            <label for="mail">Email:</label>
            <input placeholder="Nhập email chính xác" type="text" class="form-control" id="mail" name="mail">
          </div>
          <div class="form-group col-md-6">
            <label for="re-mail">Xác nhận email:</label>
            <input placeholder="Nhập lại email)" type="text" class="form-control" id="re-mail" name="remail">
          </div>
          <div class="form-group col-md-6">
            <label for="dt">Số điện thoại:</label>
            <input placeholder="Nhập số điện thoại)" type="text" class="form-control" id="dt" name="sdt">
          </div>
        </div>
        <br>
      </fieldset>
      <div class="form-row col-md-12">
        <a class="btn btn-custom" href="{{url('/home')}}">
          <i class="fas fa-home"></i>
          Trang chủ
        </a>
      </div> 
    </div>
    <br>
    <br>
    
  </div>
</div>

@stop