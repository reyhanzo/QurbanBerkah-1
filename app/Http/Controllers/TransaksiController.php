<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hewan;
use App\Transaction;

class TransaksiController extends Controller
{
  public function beli($id) {
		$transaksi = new Transaction();
		$transaksi->hewan_id = $id;
		$transaksi->user_id = auth()->user()->id;
		$transaksi->status = "Dipesan";
		$transaksi->save();

		$hewan = Hewan::find($id);
		$hewan->status = true;
		$hewan->save();

		return redirect("/hewan")->with("success", "Hewan berhasil dibeli");
	}
}
