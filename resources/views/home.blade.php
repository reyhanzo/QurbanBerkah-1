@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">Daftar pembelian</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					
					<div id="paragraph">
						<p>Silahkan Transfer ke nomer rekening 0756327645785624 (Bank Mandiri) 
							atas nama Yanto dan kirim bukti transfer ke nomer 082140849666</p>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
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
									@if ($x->status != "Terbeli")
									{!! Form::open(["url" => "/transaksi/{$x->id}/batal", "method" => "POST"]) !!}
									{!! Form::submit("Batal", ["class" => "btn btn-danger"]) !!}
									{!! Form::close() !!}
									@else
									<button class="btn btn-success">Terbeli</button>
									@endif
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