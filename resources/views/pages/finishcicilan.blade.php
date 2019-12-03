@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Daftar Cicilan</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					
					<div id="paragraph">
						<p>Silahkan Transfer per tanggal anda melakukan cicilan ke nomer rekening 0756327645785624 (Bank Mandiri) 
							atas nama Yanto dan kirim bukti transfer ke nomer 082140849666</p>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Jenis hewan</th>
								<th>Durasi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($listcicilan as $x)
							<tr>
								<td>{{ $x->jenishewan }}</td>
								<td>{{ $x->durasi }} Bulan</td>
								<td class="text-center">
                                        {!! Form::open(["url" => "/cicilan/{$x->id}/batal", "method" => "POST"]) !!}
                                        {!! Form::submit("Batal", ["class" => "btn btn-danger"]) !!}
                                        {!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection