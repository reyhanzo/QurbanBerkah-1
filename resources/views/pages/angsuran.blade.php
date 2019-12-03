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

	<div class="card" style="width: 30rem;">
		<h5 class="card-title" style="text-align: center; padding-top: 13px;">Kambing</h5>
		<img src="{{ asset("storage/kambing.jfif") }}" class="card-img-top" alt="kambing">
		<div class="card-body">
			
		<div id="myGroup" style="text-align: center;">
			<button class="btn btn-primary dropdown" data-toggle="collapse" data-target="#keys"><i class="icon-chevron-right"></i> Keys </button>
			<button class="btn btn-primary dropdown" data-toggle="collapse" data-target="#attrs"><i class="icon-chevron-right"></i> Attributes</button>
			<button class="btn btn-primary dropdown" data-toggle="collapse" data-target="#edit"><i class="icon-chevron-right"></i> Edit Details</button>

			<div class="accordion-group" style="padding: 10px;">
				<div class="collapse indent" id="keys" data-parent="#myGroup">
					keys
				</div>

				<div class="collapse indent" id="attrs" data-parent="#myGroup">
					attrs
				</div>

				<div class="collapse" id="edit" data-parent="#myGroup">
					edit
				</div>
		</div>		

	</div>

	

</div>


@endsection