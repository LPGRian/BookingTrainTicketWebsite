@extends('client.master')

@section('title')
Home
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/traCuuDatCho.css')}}" type="text/css">
@stop
 
@section('js')

<script src="{{url('js/client/home.js')}}" type="text/javascript"></script>

@stop

@section('content')
<div  class="content-parent">
<div class="content-child">
    <div class="col-md-12">
      <br>
      <h2>Tra cứu thông tin đặt chỗ</h2>
      <div class="alert alert-warning" role="alert">
        Để tra cứu thông tin đặt chỗ của bạn, hãy điền đúng và đầy đủ các thông tin dưới đây.
        <br>
      </div> 
      <form>
        <div class="alert alert-danger col-md-8 alert-custom" role="alert">
          Mã đặt chỗ không hợp lệ!
        </div>
        <div class="alert alert-danger col-md-8 alert-custom" role="alert">
          Email không hợp lệ!
        </div>
        <div class="alert alert-danger col-md-8 alert-custom" role="alert">
          Số điện thoại không hợp lệ!
        </div>
      </form>
      
    </div>
    <div class="form-custom">
      <form class="col-md-6">
        <div class="form-group">
          <label for="ipmdc">Mã đặt chỗ:</label>
          <input type="email" class="form-control" id="Mã đặt chỗ:">
        </div>
        <div class="form-group">
          <label for="ipem">Email address</label>
          <input type="email" class="form-control" id="ipem">
        </div>
        <div class="form-group">
          <label for="ipsdt">Số điện thoại:</label>
          <input type="password" class="form-control" id="ipsdt">
        </div>
        <button type="submit" class="btn btn-custom">Tra cứu</button><br>
      </form>
    </div>
    <div>
      <form>
        <div class="alert alert-primary col-md-8 alert-custom" role="alert">
          Không tìm thấy dữ liệu nào!
        </div>
        
      </form>
    </div>
</div>
</div>
@stop