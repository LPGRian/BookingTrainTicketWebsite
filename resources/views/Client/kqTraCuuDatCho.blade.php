@extends('client.master')

@section('title')
KetQuaTraCuuDatCho
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/kqTraCuu.css')}}" type="text/css">
@stop
 
@section('js')


@stop

@section('content')
<div  class="content-parent">
    <div class="content-child">
        <div class="col-md-12">
            <br>
            <h2>Tra cứu thông tin đặt chỗ</h2>
            <div class="alert alert-success col-md-8 alert-custom" role="alert">
                Tra cứu thành công!
                <br>
            </div>
            <br>
            <div class="alert alert-primary col-md-4 alert-custom-code" role="alert">
                <strong><h4>Mã chỗ ngồi: 2MSWI9</h4></strong>
            </div>
            <br>
            <b><h5>Thông tin vé</h5></b>
            <br>
            <div class="card card-custom">
                <div class="card-header">
                    <b>Vé 1</b>
                </div>
                 <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="HoTen">Họ tên:</label>
                            <input type="text" class="form-control" id="HoTen" name="hoten" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cmnd">Số giấy tờ:</label>
                            <input type="text" class="form-control" id="ipcmnd" name="cmnd" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dt">Đối tượng</label>
                            <input type="text" class="form-control" id="dt" name="doituong" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="loaicho">Loại chỗ</label>
                            <input type="text" class="form-control" id="loaicho" name="loaicho" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tau">Tàu</label>
                            <input type="text" class="form-control" id="tau" name="tau"disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ngaydi">Ngày đi</label>
                            <input type="text" class="form-control" id="ngaydi" name="ndi" disabled>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="toa">Toa</label>
                            <input type="text" class="form-control" id="toa" name="toa" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vitri">Số ghế</label>
                            <input type="text" class="form-control" id="vitri" name="soghe" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tt">Thành tiền (VND)</label>
                            <input type="text" class="form-control" id="tt" name="thanhtien" disabled>
                        </div>
                    </div>  
                </div>
                <div class="card-footer">
                    <strong>Trạng thái: </strong>
                </div>
            </div>
        </div>
    </div>
</div>
@stop