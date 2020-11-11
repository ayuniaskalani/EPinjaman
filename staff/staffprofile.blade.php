@extends('layouts.app')

@section('content')
<div class="col-md-4 col-md-offset-4">
<div class="row">

 <div class="panel panel-primary">
      <div class="panel-heading"><h3><b>Profile</b></h3></div>
      <div class="panel-body">
    
	
  <br>
 


	{{-- {!! Form::open(['method' => 'POST', 'url' => ('/profile'), 'class' => 'form-horizontal']) !!}
	
	    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	        {!! Form::label('email', 'Input label') !!}
	        {!! Form::text('email', $student->email, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('email') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!} --}}
	
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>:</th>
        <th>{{$staff ->name}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$staff ->email}}</td>
      </tr> 
    </tbody>
    <tbody>
      <tr>
        <td>Jawatan</td>
        <td>:</td>
        <td>{{$staff ->jawatan}}</td>
      </tr> 
    </tbody>
     <tbody>
      <tr>
        <td>No.Kad Pengenalan</td>
        <td>:</td>
        <td>{{$staff ->icnumber}}</td>
      </tr> 
    </tbody>
     <tbody>
      <tr>
        <td>No.Telefon</td>
        <td>:</td>
        <td>{{$staff ->telnumber}}</td>
      </tr> 
    </tbody>
    <tbody>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>{{$jabatan ->jabatanname}}</td>
      </tr> 
    </tbody>

  </table>
	
  <br>
	<div class="btn-group btn-group-justified">
  <a href="profile/edit/{{$staff ->id}}" class="btn btn-primary">Edit</a>

  </div>
</div>
  </div>
</div>
@endsection