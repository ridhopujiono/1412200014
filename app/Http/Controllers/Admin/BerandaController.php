<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;


class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('products')->orderByDesc('id_produk')->get();
        $data_count = [
            "total_pengguna" => DB::table('users')->count(),
            "total_produk" => DB::table('products')->count(),
            "total_tersedia" => DB::table('products')->where('jumlah_produk', ">", 0)->count(),
            "total_habis" => DB::table('products')->where('jumlah_produk', 0)->count(),
        ];
        return view('admin/index', [
            "title" => "Halaman Utama",
            "active" => "dashboard",
            "data_count" => $data_count,
            "data" => $data,
            "no" => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manajemen_produk()
    {
        $data = DB::table('products')->get();
        return view('admin/manajemen_produk', [
            "title" => "Manajemen Produk",
            "active" => "manajemen_produk",
            "data" => $data,
            "no" => 1
        ]);
    }

    private function simpan_foto($files, $tujuan)
    {
        if ($files == NULL) {
            return "kosong";
        } else {
            $file = $files;
            $tujuan_upload = public_path($tujuan);
            $nama_file = time() . $file->getClientOriginalName();
            // upload file
            $file->move($tujuan_upload, $nama_file);

            return $nama_file;
        }
    }

    public function store(Request $request)
    {
        $simpan_foto = $this->simpan_foto($request->file('foto_produk'), 'admin/images/products/');
        $data = DB::table('products')->insert([
            "nama_produk" => $request->nama_produk,
            "deskripsi_produk" => $request->deskripsi_produk,
            "harga_produk" => $request->harga_produk,
            "berat" => $request->berat_produk,
            "jumlah_produk" => $request->jumlah_produk,
            "foto" => $request->foto_produk,
            "jenis" => $request->jenis_produk,
            "foto" => $simpan_foto,
        ]);


        if ($data) {
            return redirect('manajemen_produk')->with('berhasil_insert', "Data produk telah ditambahkan");
        } else {
            return redirect('manajemen_produk')->with('!berhasil_insert', "Data produk telah ditambahkan");
        }
    }


    public function detail_edit($id)
    {
        $data = DB::table('products')->where('id_produk', $id)->first();
        return view('admin/detail_edit', [
            "title" => "Detail dan Edit",
            "active" => "detail_edit",
            "data" => $data,
            "no" => 1
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto_produk') != NULL) {
            $cek_foto_asli =  DB::table('products')->where("id_produk", $id)->get('foto');
            $cek_foto1 = $cek_foto_asli[0]->foto;

            $filename_asli = public_path("admin/images/products/$cek_foto1");

            if (File::exists($filename_asli)) {
                unlink($filename_asli);
            }

            $simpan_foto = $this->simpan_foto($request->file('foto_produk'), 'admin/images/products/');
            $data = DB::table('products')->where('id_produk', $id)->update([
                "nama_produk" => $request->nama_produk,
                "deskripsi_produk" => $request->deskripsi_produk,
                "harga_produk" => $request->harga_produk,
                "berat" => $request->berat_produk,
                "jumlah_produk" => $request->jumlah_produk,
                "foto" => $request->foto_produk,
                "jenis" => $request->jenis_produk,
                "foto" => $simpan_foto,
            ]);
        } else {
            $data = DB::table('products')->where('id_produk', $id)->update([
                "nama_produk" => $request->nama_produk,
                "deskripsi_produk" => $request->deskripsi_produk,
                "harga_produk" => $request->harga_produk,
                "berat" => $request->berat_produk,
                "jumlah_produk" => $request->jumlah_produk,
                "foto" => $request->foto_produk,
                "jenis" => $request->jenis_produk,
                "foto" => NULL,
            ]);
        }
        if ($data) {
            return redirect('manajemen_produk')->with('berhasil_update', "Data produk telah di ubah");
        } else {
            return redirect('manajemen_produk')->with('!berhasil_update', "Data produk telah di ubah");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek_foto_asli =  DB::table('products')->where("id_produk", $id)->get('foto');
        $cek_foto1 = $cek_foto_asli[0]->foto;

        $filename_asli = public_path("admin/images/products/$cek_foto1");

        if (File::exists($filename_asli)) {
            unlink($filename_asli);
        }

        $data = DB::table('products')->where('id_produk', $id)->delete();

        if ($data) {
            return response("success");
        }
    }
}
