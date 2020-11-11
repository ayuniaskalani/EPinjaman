@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
<div class="row">

<div class="panel panel-default">
<div class="panel-heading"><h3><b>Senarai Pinjaman</b></h3></div>
<div class="panel-body">
  
<table class="table table-striped">
    <thead>
      <tr>
{{--         <th>Id</th> --}}
        <th>Peralatan</th>
        <th>Status Pinjaman</th>
        <th>Tujuan</th>
        <th>Quantiti</th>
       {{--  <th>Tarikh Mula</th>
        <th>Tarikh Akhir</th> --}}
      </tr>
    </thead>
    @foreach ($pinjam as $pinjam)
    <tbody>
      <tr>
        <td>{{$pinjam -> peralatanjenis}}</td>
        <td>{{$pinjam -> pinjamstatus}}</td>
        <td>{{$pinjam -> pinjamsebab}}</td>
        <td>{{$pinjam -> quantiti}}</td>
       {{--  <td>{{$pinjam -> tarikhmula}}</td>
        <td>{{$pinjam -> tarikhakhir}}</td> --}}
      </tr>
    </tbody>
    @endforeach
  </table>

  </div>
  </div></div>


</div>
</div>
@endsection