@extends('client.master')

@section('title')
ThanhToan
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/thanhToan.css')}}" type="text/css">
@stop
 
@section('js')


@stop

@section('content')
<div  class="content-parent">
        <div class="content-child">
            <div class="col-md-12">
                <br>
                <h2>Thông tin giỏ vé</h2>
                <br>
                <div class="alert alert-primary col-md-5" role="alert">
                    <h4><b>Mã đặt chỗ: 2ADG5W</b></h4>   
                </div><br>
                <div class="alert alert-warning" role="alert">
                    Qúy khách vui lòng điền đầy đủ và chính xác tất cả các thông tin về hành khách đi tàu.
                    <br>
                    Để đảm bảo tính minh bạch và an toàn trong quá trình bán vé, các thông tin này sẽ được nhân viên soát vé kiểm tra trước khi lên tàu theo đúng quy định.
                </div><br>
                <form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="t-custom">
                                <tr>
                                    <th>Thông tin cá nhân</th>
                                    <th>Thông tin chỗ</th>
                                    <th>Giá vé <br>(VND)</th>
                                    <th>Giảm giá<br>(VND)</th>
                                    <th>Thành tiền<br>(VND)</th>
                                    <th>Xử lý</th>
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
                                                <input type="text" class="form-control" placeholder="Nguyễn Văn A" aria-describedby="addon-wrapping">
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
                                                <input type="text" class="form-control" placeholder="CMND/Hộ chiếu/Năm sinh trẻ em" aria-describedby="addon-wrapping2">
                                            </div>
                                        </form>
                                    </td>
                                    <div>
                                        <td >
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
                                        <td class="a-custom">
                                            <i class="fas fa-trash-alt"></i>
                                        </td> 
                                    </div>  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <h5><b>Thông tin người đặt vé</b></h5>
                    <br>
                    <div class="form-row was-validated">
                        <div class="form-group col-md-6">
                            <label for="name">Họ tên:</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Hãy điền tên của bạn.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cmnd">Số CMND/ Hộ chiếu:</label>
                            <input type="text" class="form-control" id="cmnd" placeholder="Nhập CMND/hộ chiếu" name="cmnd" required>
                            <div class="valid-feedback">Hợp lệ.</div>
                            <div class="invalid-feedback">Hãy điền CMND hoặc hộ chiếu của bạn.</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mail">Email:</label>
                            <input placeholder="Nhập email chính xác" type="text" class="form-control" id="mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="re-mail">Xác nhận email:</label>
                            <input placeholder="Nhập lại email)" type="text" class="form-control" id="re-mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dt">Số điện thoại:</label>
                            <input placeholder="Nhập số điện thoại)" type="text" class="form-control" id="dt">
                        </div>
                    </div>
                    <h5><b>Phương thức thanh toán</b></h5>
                    <br>
                    <div class="alert alert-info">
                        Hiện tại website chỉ hỗ trợ <strong>phương thức thanh toán TRẢ SAU</strong>. Thành thật xin lỗi về sự bất tiện này.
                    </div>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">
                        Tôi đã đọc kỹ và đồng ý tuân thủ tất cả các <a href="#" class="alert-link">quy định mua vé trực tuyến</a>, các <a href="#" class="alert-link">chương trình khuyến mại</a> của Công ty LPG Train Việt Nam và chịu trách nhiệm về tính xác thực của các thông tin trên.
                        </label>
                    </div>
                    <br>
                </form>
                <div class="form-row col-md-13">
                    <button type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-angle-double-left"></i>
                        Quay lại
                    </button>
                    <button type="button" class="btn btn-custom">
                        Tiếp tục
                        <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
            <br>
            
        </div>
    </div>
@stop