<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cicilan;
use App\Hewan;

class CicilanController extends Controller
{
	public function index($id) {
		$hewan = Hewan::find($id);
		return view("pages.cicilan")->with("hewan", $hewan);
	}
	
	public function cicil(Request $request, $id) {
		$cicilan = new Cicilan();
		$cicilan->hewan_id = $id;
		$cicilan->user_id = auth()->user()->id;
		$cicilan->durasi = intval($request->input("durasi"));
		$cicilan->perbulan = Hewan::find($id)->harga / $cicilan->durasi;
		$cicilan->save();

		$hewan = Hewan::find($id);
		$hewan->status = true;
		$hewan->save();

		return redirect("/home")->with("success", "Cicilan berhasil ditambah");
	}
}
