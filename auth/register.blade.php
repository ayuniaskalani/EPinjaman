@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Baru</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Sahkan Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jawatan') ? ' has-error' : '' }}">
                            <label for="jawatan" class="col-md-4 control-label">Jawatan</label>

                            <div class="col-md-6">
                                <input id="jawatan" type="text" class="form-control" name="jawatan" value="{{ old('jawatan') }}">

                                @if ($errors->has('jawatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jawatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('icnumber') ? ' has-error' : '' }}">
                            <label for="icnumber" class="col-md-4 control-label">No.Kad Pengenalan</label>

                            <div class="col-md-6">
                                <input id="icnumber" type="text" class="form-control" name="icnumber" value="{{ old('icnumber') }}">

                                @if ($errors->has('icnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telnumber') ? ' has-error' : '' }}">
                            <label for="telnumber" class="col-md-4 control-label">No.Telefon</label>

                            <div class="col-md-6">
                                <input id="telnumber" type="text" class="form-control" name="telnumber" value="{{ old('telnumber') }}">

                                @if ($errors->has('telnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for='id' class="col-md-4 control-label">Jabatan</label>
                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id" id="jabatan_id">
                                    <option value+"">-Pilih-</option>
                                    @foreach ($jabatan as $jabatan)
                                        <option value="{{ $jabatan -> id }}">{{ $jabatan -> jabatanname}}</option>
                                    @endforeach
                                </select>
                                @if ($errors-> has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id')}}</strong>
                                    </span>
                                @endif
                        </div>

                        {{--  <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="col-md-4 control-label">Jabatan</label>
                                 <div class="form-group">
                                    <label for="sel1">pilih:</label>
                                    <select class="form-control" id="sel1">
                                        <option value="1">Bahagian Pengurusan Teknologi Maklumat</option>
                                        <option value="2">Unit Perancangan Negeri</option>
                                        <option value="3">Bahagian Sumber Manusia</option>
                                    </select>
                                </div>  --}}
                             {{-- <div class="dropdown">
                                <div class="col-md-6">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">pilih
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bahagian Pengurusan Teknologi Maklumat</a></li>
                                        <li><a href="#">Unit Perancangan Negeri</a></li>
                                        <li><a href="#">Bahagian Sumber Manusia</a></li>
                                    </ul>
                                </div> --}}

                                @if ($errors->has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Daftar
                                </button>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
