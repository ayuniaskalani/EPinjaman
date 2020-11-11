@extends('layouts.app')

@section('content')

<div class="col-md-4 col-md-offset-4">
<div class="row">

{{-- {!! Form::open(['method' => 'POST', 'url' => ('profile/update/{{$staff -> id}}'), 'class' => 'form-horizontal']) !!} --}}
<form class="form" method="POST" action={{url('profile/update',[$staff ->id])}}>
<input type = "hidden" name = "method" value = "POST">
{{csrf_field()}}
<div class="panel panel-success">
      <div class="panel-heading"><h3><b>Edit</b></h3></div>
      <div class="panel-body">
    

		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	        {!! Form::label('name', 'Name') !!}
	        {!! Form::text('name', $staff->name, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('name') }}</small>
	    </div>	
	
	    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	        {!! Form::label('email', 'Email') !!}
	        {!! Form::text('email', $staff->email, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('email') }}</small>
	    </div>

		 <div class="form-group{{ $errors->has('jawatan') ? ' has-error' : '' }}">
	        {!! Form::label('jawatan', 'Jawatan') !!}
	        {!! Form::text('jawatan', $staff->jawatan, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('jawatan') }}</small>
	    </div>	

	    <div class="form-group{{ $errors->has('icnumber') ? ' has-error' : '' }}">
	        {!! Form::label('icnumber', 'No.Kad Pengenalan') !!}
	        {!! Form::text('icnumber', $staff->icnumber, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('icnumber') }}</small>
	    </div> 

	    <div class="form-group{{ $errors->has('telnumber') ? ' has-error' : '' }}">
	        {!! Form::label('telnumber', 'No.Telefon') !!}
	        {!! Form::text('telnumber', $staff->telnumber, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('telnumber') }}</small>
	    </div>

	    <br>

	    <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
	    	<label for='id' class="col-md-2 control-label">Jabatan</label>
	    	<div class="col-md-6">
	    		<select class="form-control" name="jabatan_id" id="jabatan_id">
	    			<option value="{{ $jab -> id }}">{{$jab -> jabatanname}}</option>
	    			@foreach ($jabatan as $jabatan)
	    				<option value="{{ $jabatan -> id }}" {{ (strcmp ($jab-> id,$jabatan-> id)==0)? "disabled" :""}}>{{ $jabatan -> jabatanname}}</option>
	    			@endforeach
	    		</select>
	    		@if ($errors-> has('jabatan_id'))
	    			<span class="help-block">
	    				<strong>{{ $errors->first('jabatan_id')}}</strong>
	    			</span>
	    		@endif
	    	</div>
	        {{-- {!! Form::label('jabatan_id', 'Jabatan') !!}
	        {!! Form::text('jabatan_id', $staff->jabatan_id, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('jabatan_id') }}</small> --}}
	    </div> 

	    <br><br>   

	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Kemaskini", ['class' => 'btn btn-success']) !!}
	    </div>



	    </div>
</div>
	
	{{-- {!! Form::close() !!} --}}

</form>
 </div>
</div>
@endsection