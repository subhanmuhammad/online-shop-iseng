<?php

namespace App\Http\Controllers;

use App\Models\carousel;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function landingpage()
    {
        $product = Produk::all();
        return view('index', compact('product'));
    }

    public function data()
    {
        $product = Produk::all();
        $carousel = carousel::all();

        return view('utils.menu.data', compact('product', 'carousel'));
    }

    public function tambah_data()
    {
        return view('utils.menu.tambah_data');
    }
    /**
     * Display a listing of the resource.
     */
    public function lihat_detail()
    {
        return view('utils.detail-data');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'picture' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Imput Gagal');
        }

        $picture = $request->file('picture');
        $file_name = date('Y-m-d') . $picture->getClientOriginalName();
        $path = 'picture/' . $file_name;
        Storage::disk('public')->put($path, file_get_contents($picture));

        $data = new Produk();
        $data->product_name = $request->product_name;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->picture = $file_name;
        $data->save();
        return redirect()->back();
    }

    public function tambah_data_carousel()
    {
        return view('utils.menu.carousel');
    }
    public function store_data_carousel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'carousel_name' => 'required',
            'picture' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Imput Gagal');
        }

        $picture = $request->file('picture');
        $file_name = date('Y-m-d') . $picture->getClientOriginalName();
        $path = 'picture/carousel/' . $file_name;
        Storage::disk('public')->put($path, file_get_contents($picture));

        $data = new carousel();
        $data->name = $request->carousel_name;
        $data->picture = $file_name;
        $data->save();
        return redirect('/data');
    }

    public function tambah_data_jualan()
    {
        return view('utils.menu.tambah_data_jualan');
    }

    public function store_data_jualan(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'price' => 'required',
            'picture' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Imput Gagal');
        }

        $picture = $request->file('picture');
        $file_name = date('Y-m-d') . $picture->getClientOriginalName();
        $path = 'picture/product/' . $file_name;
        Storage::disk('public')->put($path, file_get_contents($picture));

        $data = new Produk();
        $data->product_name = $request->product_name;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->picture = $file_name;
        $data->save();
        return redirect('/data');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($product_id)
    {
        $data = Produk::find($product_id);
        $data->delete();
        return back();
    }
}
