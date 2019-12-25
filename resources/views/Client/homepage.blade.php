@extends('client.master')

@section('title')
Home
@stop

@section('css')
<link rel="stylesheet" href="{{url('css/client/viewSearchTicket.css')}}" type="text/css">
@stop
 
@section('js')
<script>
    today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());

    $('#nd').datepicker({ 
      format: 'dd-mm-yyyy',
      uiLibrary: 'bootstrap4', 
      iconsLibrary: 'materialicons', 
      minDate: today,
      maxDate: function(){
        return $('#nv').val();
      }
    });
    $('#nv').datepicker({ 
      format: 'dd-mm-yyyy',
      uiLibrary: 'bootstrap4', 
      iconsLibrary: 'materialicons', 
      minDate: function(){
        return $('#nd').val();
      }
    });
</script>
<script src="{{url('js/client/home.js')}}" type="text/javascript"></script>

@stop

@section('content')
<div class="img">
	<img  src="{{url('assets/bgSTicket.jpg')}}" alt="" style="width: 100%; height: auto;">
	<div class="card card-custom col-sm-4">
	  <div class="card-header card-header-custom">Thông tin hành trình</div>
	  <div class="card-body card-body-custom">
	    <form>
	      <div class="form-group" >
	        <label for="gd">Ga đến:</label>
	        <input placeholder="Ga đến..." type="text" class="form-control" id="gd">  
	      </div>
	      <div class="form-group">
	        <label for="gdi">Ga đi:</label>
	        <input placeholder="Ga đi..." type="text" class="form-control" id="gdi">
	      </div>
	      <div class="row" style="margin-left: auto;" id="radio-type-ticket">
	        <div class="form-group form-check-inline ">
	          <label class="form-check-label" for="mc">
	            <input type="radio" class="form-check-input" id="mc" name="type" value="1" checked>Một chiều
	          </label>
	        </div>
	        <div class="form-group form-check ">
	          <label class="form-check-label" for="kh">
	            <input type="radio" class="form-check-input" id="kh" name="type" value="2">Khứ hồi
	          </label>
	        </div>
	      </div>
	      <div class="form-group">
	        <label for="nd">Ngày đi:</label>
	        <input type="date" class="form-control datepicker" id="nd">
	      </div>
	      <div class="form-group">
	        <label for="nv">Ngày về:</label>
	        <input type="date" class="form-control datepicker" id="nv" disabled>
	      </div><br>
	      <button type="submit" class="btn btn-custom">Tìm vé</button>
	    </form>
	  </div>
	</div>
	</div>
@stop