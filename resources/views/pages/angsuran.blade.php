@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Program Angsuran</h1>

	<style>
		.table{
			margin: auto;
		}

		#table_table{
			margin: auto;
			width: 70%;
		}

		#paragraph{
			margin: auto;
			width: 80%;
		}
	</style>

	<br>
	<br>
	<div id="paragraph">
		<p>Program Angsuran QurbanBerkah adalah sebuah program untuk memudahkan pembeli dari golongan
		kurang mampu untuk membeli hewan qurban. Cara kerja program ini adalah calon pembeli diwajibkan
		melakukan sejumlah angsuran dalam jangka waktu yang ditentukan. total dari angsuran akan digunakan
		untuk membeli hewan Qurban yang tersedia.</p>
	</div>
	<br>
	<br>
	<br>

	<div class="table">
		<table id="table_table">
			<tr>
				<th>Besar Angsuran</th>
				<th>Lama Angsuran</th>
				<th>Cicilan per Bulan</th>
			</tr>
			<tr>
				<td>Rp. 3.000.000</td>
				<td>
					3 Bulan<br>
					6 Bulan<br>
					12 Bulan
				</td>
				<td>
					Rp 1.000.000 / Bulan<br>
					Rp 500.000 / Bulan<br>
					RP 125.000 / Bulan
				</td>
			</tr>
			<tr>
				<td>E</td>
				<td>E</td>
				<td>F</td>
			</tr>
			<tr>
				<td>E</td>
				<td>G</td>
				<td>H</td>
			</tr>
		</table>
	</div>

</div>


@endsection