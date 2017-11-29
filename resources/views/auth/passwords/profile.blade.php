@extends('layouts.master')
@section('title')
Ubah Password
@endsection
@section('main')
<section class="content-header">
    <h1>
      Data Master
    <small>Ubah Password</small>
      </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Profile</a></li>
      <li class="active">Ubah Password</li>
    </ol>
</section>
<form method="post" action="{{route('user.changePass', Auth::user()->id)}}">
	{{csrf_field()}}
	<label>Password Lama</label>
	<input type="text" name="current_pass">
	<label>Password Baru</label>
	<input type="text" name="new_pass">
	<label>Konfirmasi Password</label>
	<input type="text" name="confirmed">
	<input type="submit" name="">
</form>
@endsection