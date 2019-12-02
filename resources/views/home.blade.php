@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Daftar pembelian</div>

				<div class="card-body">
					@include('layouts.messages')
					
					<div id="paragraph">
						<p>Silahkan Transfer ke nomer rekening 0756327645785624 (Bank Mandiri) 
							atas nama Yanto dan kirim bukti transfer ke nomer 082140849666</p>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr class="bg-success">
								<th>Nama hewan</th>
								<th>Harga</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($listtransaksi as $x)
							<tr>
								<td>{{ $x->hewan->nama }}</td>
								<td>Rp{{ $x->hewan->harga }}</td>
								<td>{{ $x->status }}</td>
								<td>
									{!! Form::open(["action" => ["TransaksiController@batal", $x->id], "method" => "POST"]) !!}
									{!! Form::submit("Batal", ["class" => "btn btn-danger"]) !!}
									{!! Form::close() !!};;;
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