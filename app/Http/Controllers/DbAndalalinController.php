<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\DbAndalalin;
use Illuminate\Support\Facades\Redirect;

class DbAndalalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DbAndalalin::orderBy('id', 'DESC')->get();
        return Inertia::render('Andalalin/Index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Register';
        return Inertia::render('Andalalin/Register', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file1 = $request->surat_pemohon;
        $file2 = $request->surat_ktr;
        $file3 = $request->rencana_tapak;
        $file4 = $request->ijin_ppt;
        $file5 = $request->imb;
        $file6 = $request->ktp;
        $file7 = $request->ttd;

        $surat_pemohon = $file1->getClientOriginalName();
        $surat_ktr = $file2->getClientOriginalName();
        $rencana_tapak = $file3->getClientOriginalName();
        $ijin_ppt = $file4->getClientOriginalName();
        $imb = $file5->getClientOriginalName();
        $ktp = $file6->getClientOriginalName();
        $ttd = $file7->getClientOriginalName();

        $upload = new DbAndalalin();
        $upload->nama_pemohon = $request->nama_pemohon;
        $upload->alamat_pemohon = $request->alamat_pemohon;
        $upload->no_tlp = $request->no_tlp;
        $upload->jenis_usaha = $request->jenis_usaha;
        $upload->alamat_usaha = $request->alamat_usaha;
        $upload->luas_lahan = $request->luas_lahan;
        $upload->luas_bangunan = $request->luas_bangunan;
        $upload->status_lahan = $request->status_lahan;
        $upload->email = $request->email;
        $upload->surat_pemohon = $surat_pemohon;
        $upload->surat_ktr = $surat_ktr;
        $upload->rencana_tapak = $rencana_tapak;
        $upload->ijin_ppt = $ijin_ppt;
        $upload->imb = $imb;
        $upload->ktp = $ktp;
        $upload->ttd = $ttd;
        $upload->verifikasi = $request->verifikasi;

        $file1->move(public_path().'/img',$surat_pemohon);
        $file2->move(public_path().'/img',$surat_ktr);
        $file3->move(public_path().'/img',$rencana_tapak);
        $file4->move(public_path().'/img',$ijin_ppt);
        $file5->move(public_path().'/img',$imb);
        $file6->move(public_path().'/img',$ktp);
        $file7->move(public_path().'/img',$ttd);
        $path = public_path();
        $upload->save();

        return Redirect::route('andalalin.index')->with('message', 'Pengajuan Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
