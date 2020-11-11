@extends('layouts.app')

@section('content')

<div class="col-md-4 col-md-offset-4">
<div class="row">

{{-- {!! Form::open(['method' => 'PUT', 'url' => "{{ ('permohonan.update',[$pinjam -> pinjam_id]) }}", 'class' => 'form-horizontal']) !!}
 --}} {{-- <form class="form" method="POST" action= "{{ route('permohonan.update',[$pinjam -> pinjam_id]) }}"    "{{url('\permohonan',[$pinjam -> pinjam_id])}}" > 
<input type = "hidden" name = "method" value = 'PUT'> --}}

<form class="form" method="POST" action={{url('permohonan/update',[$pinjam ->pinjam_id])}}>
<input type = "hidden" name = "method" value = "POST">
{{csrf_field()}}
<div class="panel panel-success">
      <div class="panel-heading"><h3><b>Edit</b></h3></div>
      <div class="panel-body">
     {{--  {{$pinjam ->pinjam_id}} --}}

      <div class="form-group{{ $errors->has('peralatan_id') ? ' has-error' : '' }}">
	    	<label for='id' class="col-md-4 control-label">Jenis Peralatan</label>
	    	<div class="col-md-6">
	    		<select class="form-control" name="peralatan_id" id="peralatan_id">
	    			<option value="{{ $pinjam -> peralatan_id }}">{{App\Peralatan::find($pinjam-> peralatan_id)->peralatanjenis}}</option>
	    			@foreach ($peralatan as $peralatan)
	    				<option value="{{ $peralatan -> id }}" {{ (strcmp ($peralatan-> id,$pinjam-> peralatan_id)==0)? "disabled" :""}}>{{ $peralatan -> peralatanjenis}}</option>
	    			@endforeach
	    		</select>
	    		@if ($errors-> has('peralatan_id'))
	    			<span class="help-block">
	    				<strong>{{ $errors->first('peralatan_id')}}</strong>
	    			</span>
	    		@endif
	    	</div>
	    </div>
		<br><br>

		<div class="form-group{{ $errors->has('quantiti') ? ' has-error' : '' }}">
	        {!! Form::label('quantiti', 'Quantiti') !!}
	        {!! Form::text('quantiti', $pinjam->quantiti, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('quantiti') }}</small>
	    </div>		   

     		
		<div class="form-group{{ $errors->has('pinjamsebab') ? ' has-error' : '' }}">
	        {!! Form::label('pinjamsebab', 'Tujuan') !!}
	        {!! Form::text('pinjamsebab', $pinjam->pinjamsebab, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('pinjamsebab') }}</small>
	    </div>	

	      
	
	    <div class="form-group{{ $errors->has('tarikhmula') ? ' has-error' : '' }}">
	        {!! Form::label('tarikhmula', 'Tarikh Mula') !!}
	        {!! Form::date('tarikhmula', $pinjam->tarikhmula, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('tarikhmula') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('tarikhakhir') ? ' has-error' : '' }}">
	        {!! Form::label('tarikhakhir', 'Tarikh Akhir') !!}
	        {!! Form::date('tarikhakhir', $pinjam->tarikhakhir, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('tarikhakhir') }}</small>
	    </div>

		
	    <br><br>   

	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Kemaskini", ['class' => 'btn btn-success']) !!}
	    </div>



	    </div>
</div>
	
 {!! Form::close() !!}

</form>
 </div>
</div>
@endsection