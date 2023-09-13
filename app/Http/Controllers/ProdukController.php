<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\Barang;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function lihat_detail($id)
    {
        $product = Produk::find($id);
        // dd($product->id);
        return view('utils.detail-data', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah_keranjang(Request $request, $id)
    {
        $barang = Produk::where('id', $id)->first();

        if ($request->jumlah_pesanan > $barang->stok) {
            return redirect()->back();
        }

        $cek_pesanan = Pesanan::where('user_id',  Auth::user()->id)->where('status', 0)->first();
        if (empty($cek_pesanan)) {
            $pesanan = new Pesanan();
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = Carbon::now();
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0; #$request->jumlah_pesanan * $barang->price;
            $pesanan->save();
        }



        //simoan ke databse pesanana detail
        $pesanan_baru = Pesanan::where('user_id',  Auth::user()->id)->where('status', 0)->first();

        $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if (empty($cek_pesanan_detail)) {
            $pesanan_detail = new PesananDetail();
            $pesanan_detail->barang_id = $barang->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesanan;
            $pesanan_detail->jumlah_harga = $request->jumlah_pesanan * $barang->price;
            $pesanan_detail->save();
        } else {
            $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $pesanan_detail_jumlah = $pesanan_detail->jumlah +  $request->jumlah_pesanan;

            //harga terbaru
            $harga_pesanan_detail_baru = $barang->harga * $request->jumlah_pesanan;
            $pesanan_detail->jumlah_harga =  $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        //total jumlah
        $pesanan = Pesanan::where('user_id',  Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $barang->harga * $request->jumlah_pesanan;
        // dd($pesanan);
        $pesanan->update();


        return redirect()->back();
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
