@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
<div class="row">

{!! Form::open(['method' => 'POST', 'url' => ('/permohonan'), 'class' => 'form-horizontal']) !!}
{{csrf_field()}}

 <div class="panel panel-info">
      <div class="panel-heading"><h3><b>Maklumat Peralatan</b></h3></div>
      	<div class="panel-body">
    
<br>
{{--  <div class="form-group">
  <label for="usr">Jenis Peralatan : </label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Nombor Siri Peralatan : </label>
  <input type="text" class="form-control" id="usr">
</div> --}}

<div class="form-group{{ $errors->has('peralatan_id') ? ' has-error' : '' }}">
    <label for='id' class="col-md-4 control-label">Jenis Peralatan : </label>
        <div class="col-md-6">
            <select class="form-control" name="peralatan_id" id="peralatan_id">
            <option value+"">-Pilih-</option>
            	@foreach ($pinjam as $pinjam)
                	<option value="{{ $pinjam -> id }}">{{ $pinjam -> peralatanjenis}}</option>
            	@endforeach
            </select>
            @if ($errors-> has('peralatan_id'))
                <span class="help-block">
                	<strong>{{ $errors->first('peralatan_id')}}</strong>
                </span>
            @endif
        </div>
</div>

<br><br><br>

<div class="form-group">
<label for='quantiti' class="col-md-4 control-label">Quantiti : </label>
 	<div class="form-group">
 		<div class="col-md-6">
  		<select class="form-control" name="quantiti" id="quantiti">
  			<option>-Pilih-</option>
    		<option value="1">1</option>
    		<option value="2">2</option>
    		<option value="3">3</option>
    		<option value="4">4</option>
  		</select>
  		</div>
    </div>
</div>

<br>


<div class="form-group">
  	<label for='pinjamsebab' class="col-md-4 control-label">Tujuan : </label>
  	<div class="col-md-6">
  	<textarea class="form-control" rows="5" name="pinjamsebab" id="pinjamsebab"></textarea>
</div></div>

{{-- <br><br>
<h4><b>Maklumat Jabatan</b></h4>
<br>
<div class="form-group">
  <label for="usr">Nama : </label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">Alamat : </label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">No.Telefon : </label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="usr">E-mail : </label>
  <input type="text" class="form-control" id="usr">
</div> --}}

<br>

<div class="form-group">
  	<label class="control-label col-md-4" for="tarikhmula">Tarikh Mula : </label>
  	<div class="col-md-6">
  		<input type="date" name="tarikhmula" id="tarikhmula" tabindex="1" class="form-control" value="" required>
  	</div>
</div> 

<br><br><br>

<div class="form-group">
  	<label class="control-label col-md-4" for="tarikhakhir">Tarikh Tamat : </label>
  	<div class="col-md-6">
  		<input type="date" name="tarikhakhir" id="tarikhakhir" tabindex="1" class="form-control" value="" required>
  	</div>
</div>

<br><br>

{{-- <form action="/action_page.php">
  First name: <input type="text" name="fname"><br>
</form> --}}
<br>

<div class="btn-group pull-right">
	        {{-- {!! Form::reset("Batal", ['class' => 'btn btn-default']) !!} --}}
	        {!! Form::submit("Hantar", ['class' => 'btn btn-info']) !!}
</div>

<br><br>
<br>

</div>
</div>

{!! Form::close() !!}

</div>
</div>
@endsection