@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
<div class="row">



<div class="panel panel-success">
      <div class="panel-heading"><h3><b>Permohonan </b></h3></div>
      <div class="panel-body">
   @include('flash::message') 



<p>Senarai pinjaman peralatan yang pernah dipohon :</p>	
<br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
       {{--  <th>Peralatan</th>
        <th>Status Pinjaman</th> --}}
        <th>Tarikh Mula</th>
        <th>Tarikh Akhir</th>
      </tr>
    </thead>
    @foreach ($pinjam as $pinjam)
    <tbody>
      <tr>
     {{--  <td>{{$pinjam->id}}</td> --}}
        <td><p><b><a href="permohonan/{{$pinjam -> pinjam_id}}" target="_blank">{{$pinjam -> pinjam_id}}</a></b></p></td> 
        <td>{{$pinjam -> tarikhmula}}</td>
        <td>{{$pinjam -> tarikhakhir}}</td>

        <td>
  	{{-- 	<a href="permohonan/{{$pinjam ->pinjam_id}}/edit" class="btn btn-primary">Edit</a> --}}

        {{--   DELETE --}}
	{!! Form::open(['method' => 'DELETE', 'route' => ['permohonan.destroy',$pinjam -> pinjam_id], 'class' =>' formDelete', 'style' => 'display:inline;']) !!}

	{!! Form::hidden('id', $pinjam-> pinjam_id) !!}	

	{!! Form::submit("Delete",['class' => 'btn btn-danger', 'onclick'=>'return confirm("Are
	you confirm you want to delete?")']) !!}

	{!! Form::close() !!}</td>
        
      </tr>
      
    </tbody>
    @endforeach
  </table>

	{{--   DELETE --}}
	{{-- {!! Form::open(['method' => 'DELETE', 'route' => ['permohonan.destroy',$pinjam ->id], 'class' =>' formDelete', 'style' => 'display:inline;']) !!}

	{!! Form::hidden('id', $pinjam->id) !!}	

	{!! Form::submit("Delete",['class' => 'btn btn-danger', 'onclick'=>'return confirm("Are
	you confirm you want to delete?")']) !!}

	{!! Form::close() !!} --}}

	</div>
	<div class="btn-group btn-group-justified">
  		<a href="permohonan/create" class="btn btn-success">Permohonan Baru</a>

 	</div>

 <br>

 	</div>
</div>

</div>
@endsection