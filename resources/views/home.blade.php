@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Daftar pembelian</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Nama hewan</th>
								<th>Harga</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($listtransaksi as $x)
							<tr>
								<td>{{ $x->hewan->nama }}</td>
								<td>Rp{{ $x->hewan->harga }}</td>
								<td>{{ $x->status }}</td>
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