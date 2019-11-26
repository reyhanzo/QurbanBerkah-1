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
			width: 50%;
		}

		#paragraph{
			margin: auto;
			width: 70%;
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
				<th>A</th>
				<th>B</th>
			</tr>
			<tr>
				<td>C</td>
				<td>D</td>
			</tr>
			<tr>
				<td>E</td>
				<td>F</td>
			</tr>
			<tr>
				<td>G</td>
				<td>H</td>
			</tr>
		</table>
	</div>

</div>


@endsection