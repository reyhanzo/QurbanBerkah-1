@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Pilih paket cicilan</h1>

	{!! Form::open(["action" => ["CicilanController@cicil", $hewan->id]]) !!}
	<div class="form-check">
		{!! Form::radio("durasi", "3 Bulan", true, ["class" => "form-check-input"]) !!}
		{!! Form::label("durasi", "3 Bulan", ["class" => "form-check-label"]) !!}
	</div>
	<div class="form-check">
		{!! Form::radio("durasi", "6 Bulan", false, ["class" => "form-check-input"]) !!}
		{!! Form::label("durasi", "6 Bulan", ["class" => "form-check-label"]) !!}
	</div>
	<div class="form-check">
		{!! Form::radio("durasi", "12 Bulan", false, ["class" => "form-check-input"]) !!}
		{!! Form::label("durasi", "12 Bulan", ["class" => "form-check-label"]) !!}
	</div>
	{!! Form::submit("Pilih", ["class" => "btn btn-primary"]) !!}
	{!! Form::close() !!}
</div>
@endsection