@extends('client.master')

@section('title')
KiemTraVe
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/kiemTraVe.css')}}" type="text/css">
@stop
 
@section('js')
<script>
        today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());

        $('#nd').datepicker({ 
          format: 'dd-mm-yyyy',
          uiLibrary: 'bootstrap4', 
          iconsLibrary: 'materialicons', 
        });
</script>

@stop

@section('content')
<div  class="content-parent">
        <div class="content-child">
            <div class="col-md-12">
                <br>
                <h2>Kiểm tra vé</h2>
                <div class="alert alert-warning" role="alert">
                    Theo quy định của Tổng công ty Đường sắt Việt Nam, hành khách có thông tin giấy tờ tùy thân trùng với thông tin trên vé điện tử mới đủ điều kiện vào ga lên tàu.
                    <br>
                    Để đảm bảo quyền lợi cho hành khách, tránh mua phải vé giả, hoặc vé không đúng với quy định, quý khách có thể kiểm tra lại vé điện tử của mình bằng cách điền đầy đủ các thông tin dưới đây.
                </div>
                <form>
                    <div class="alert alert-danger" role="alert">
                        Thông tin quý khách nhập chưa chính xác, vui lòng kiểm tra các mục lỗi màu đỏ bên dưới.
                    </div>
                    <div class="alert alert-success" role="alert">
                        <strong>Vé điện tử của bạn hoàn toàn hợp lệ.</strong>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Không tìm thấy vé điện tử phù hợp.</strong></p><p>- Quý khách vui lòng kiểm tra và nhập chính xác các thông tin tìm vé.</p><p>- Nếu vẫn không tìm thấy Vé xin vui lòng ra ga để kiểm tra hoặc liên hệ đầu số <strong>19000109</strong> để được trợ giúp.</p>
                    </div>
                </form>
                
                <form class="form-custom">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputMaVe">Mã Vé:</label>
                            <input placeholder="Nhập mã vé chính xác" type="text" class="form-control" id="inputMaVe">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputMactau">Mác tàu</label>
                            <input placeholder="Nhập mã tàu (Ví dụ: SE2, TN1,...)" type="text" class="form-control" id="inputMactau">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputGaDen">Ga đến:</label>
                            <input placeholder="Nhập mã ga đến..." type="text" class="form-control" id="inputGaDen">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputGaDi">Ga đi</label>
                            <input placeholder="Nhập mã ga đi..." type="text" class="form-control" id="inputGaDi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSoGiayTo">Số giấy tờ</label>
                            <input placeholder="Nhập số giấy tờ cá nhân ghi trên vé" type="text" class="form-control" id="inputSoGiayTo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nd">Ngày đi:</label>
                            <input type="date" class="form-control datepicker" id="nd">
                        </div>
                        <button type="submit" class="btn btn-custom">Tìm vé</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop