<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{

    public function saveMempelaiPria(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);
        $fotoMempelai = $request->foto_mempelai_pria;
        if (!$informasi->first()) {
            $fileName = uniqid() . '.jpg';
            $fotoMempelai->move(public_path('data/informasi/'), $fileName);
            Informasi::create([
                'id_user' => auth()->user()->id,
                'foto_mempelai_pria' => $fileName,
                'nama_mempelai_pria' => $request->nama_mempelai_pria,
                'nama_ayah_mempelai_pria' => $request->nama_ayah_mempelai_pria,
                'nama_ibu_mempelai_pria' => $request->nama_ibu_mempelai_pria,
            ]);
        } else {
            if (!$fotoMempelai) {
                $informasi->update([
                    'nama_mempelai_pria' => $request->nama_mempelai_pria,
                    'nama_ayah_mempelai_pria' => $request->nama_ayah_mempelai_pria,
                    'nama_ibu_mempelai_pria' => $request->nama_ibu_mempelai_pria,
                ]);
            } else {
                $fileName = uniqid() . '.jpg';
                $fotoMempelai->move(public_path('data/informasi/'), $fileName);
                unlink(public_path('data/informasi/' . $informasi->first()->foto_mempelai_pria));
                $informasi->update([
                    'nama_mempelai_pria' => $request->nama_mempelai_pria,
                    'nama_ayah_mempelai_pria' => $request->nama_ayah_mempelai_pria,
                    'nama_ibu_mempelai_pria' => $request->nama_ibu_mempelai_pria,
                    'foto_mempelai_pria' => $fileName,
                ]);
            }
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveMempelaiWanita(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);
        $fotoMempelai = $request->foto_mempelai_wanita;
        if (!$informasi->first()) {
            $fileName = uniqid() . '.jpg';
            $fotoMempelai->move(public_path('data/informasi/'), $fileName);
            Informasi::create([
                'id_user' => auth()->user()->id,
                'foto_mempelai_wanita' => $fileName,
                'nama_mempelai_wanita' => $request->nama_mempelai_wanita,
                'nama_ayah_mempelai_wanita' => $request->nama_ayah_mempelai_wanita,
                'nama_ibu_mempelai_wanita' => $request->nama_ibu_mempelai_wanita,
            ]);
        } else {
            if (!$fotoMempelai) {
                $informasi->update([
                    'nama_mempelai_wanita' => $request->nama_mempelai_wanita,
                    'nama_ayah_mempelai_wanita' => $request->nama_ayah_mempelai_wanita,
                    'nama_ibu_mempelai_wanita' => $request->nama_ibu_mempelai_wanita,
                ]);
            } else {
                $fileName = uniqid() . '.jpg';
                $fotoMempelai->move(public_path('data/informasi/'), $fileName);
                if ($informasi->first()->foto_mempelai_wanita != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->foto_mempelai_wanita));
                }
                $informasi->update([
                    'nama_mempelai_wanita' => $request->nama_mempelai_wanita,
                    'nama_ayah_mempelai_wanita' => $request->nama_ayah_mempelai_wanita,
                    'nama_ibu_mempelai_wanita' => $request->nama_ibu_mempelai_wanita,
                    'foto_mempelai_wanita' => $fileName,
                ]);
            }
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveAkad(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);

        if (!$informasi->first()) {
            Informasi::create([
                'id_user' => auth()->user()->id,
                'tgl_akad' => $request->tgl_akad,
                'jam_akad' => $request->jam_akad,
                'lokasi_akad' => $request->lokasi_akad,
            ]);
        } else {
            $informasi->update([
                'tgl_akad' => $request->tgl_akad,
                'jam_akad' => $request->jam_akad,
                'lokasi_akad' => $request->lokasi_akad,
            ]);
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveResepsi(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);

        if (!$informasi->first()) {
            Informasi::create([
                'id_user' => auth()->user()->id,
                'tgl_resepsi' => $request->tgl_resepsi,
                'jam_resepsi' => $request->jam_resepsi,
                'lokasi_resepsi' => $request->lokasi_resepsi,
            ]);
        } else {
            $informasi->update([
                'tgl_resepsi' => $request->tgl_resepsi,
                'jam_resepsi' => $request->jam_resepsi,
                'lokasi_resepsi' => $request->lokasi_resepsi,
            ]);
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveQuotes(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);

        if (!$informasi->first()) {
            Informasi::create([
                'id_user' => auth()->user()->id,
                'quotes' => $request->quotes,
            ]);
        } else {
            $informasi->update([
                'tgl_resepsi' => $request->tgl_resepsi,
                'quotes' => $request->quotes,
            ]);
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveKisahCinta(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);
        $gambarPertamaKetemu = $request->gambar_pertama_ketemu;
        $gambarLamaran = $request->gambar_lamaran;
        if (!$informasi->first()) {
            $fileNamePertamaKetemu = uniqid() . '.jpg';
            $fileNameLamaran = uniqid() . '.jpg';
            $gambarPertamaKetemu->move(public_path('data/informasi/'), $fileNamePertamaKetemu);
            $gambarLamaran->move(public_path('data/informasi/'), $fileNameLamaran);
            Informasi::create([
                'id_user' => auth()->user()->id,
                'gambar_pertama_ketemu' => $fileNamePertamaKetemu,
                'gambar_lamaran' => $fileNameLamaran,
                'lokasi_pertama_ketemu' => $request->lokasi_pertama_ketemu,
                'cerita_pertama_ketemu' => $request->cerita_pertama_ketemu,
                'lokasi_lamaran' => $request->lokasi_lamaran,
                'cerita_lamaran' => $request->cerita_lamaran,
            ]);
        } else {
            if (!$gambarPertamaKetemu || !$gambarLamaran) {
                $informasi->update([
                    'lokasi_pertama_ketemu' => $request->lokasi_pertama_ketemu,
                    'cerita_pertama_ketemu' => $request->cerita_pertama_ketemu,
                    'lokasi_lamaran' => $request->lokasi_lamaran,
                    'cerita_lamaran' => $request->cerita_lamaran,
                ]);
            } else {
                $fileNamePertamaKetemu = uniqid() . '.jpg';
                $fileNameLamaran = uniqid() . '.jpg';
                $gambarPertamaKetemu->move(public_path('data/informasi/'), $fileNamePertamaKetemu);
                $gambarLamaran->move(public_path('data/informasi/'), $fileNameLamaran);
                if ($informasi->first()->gambar_pertama_ketemu != '' || $informasi->first()->gambar_lamaran != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->gambar_lamaran));
                    unlink(public_path('data/informasi/' . $informasi->first()->gambar_pertama_ketemu));
                }
                $informasi->update([
                    'gambar_pertama_ketemu' => $fileNamePertamaKetemu,
                    'gambar_lamaran' => $fileNameLamaran,
                    'lokasi_pertama_ketemu' => $request->lokasi_pertama_ketemu,
                    'cerita_pertama_ketemu' => $request->cerita_pertama_ketemu,
                    'lokasi_lamaran' => $request->lokasi_lamaran,
                    'cerita_lamaran' => $request->cerita_lamaran,
                ]);
            }
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }

    public function saveGallery(Request $request)
    {

        $informasi = Informasi::where('id_user', auth()->user()->id);
        $gallery1 = $request->gallery1;
        $gallery2 = $request->gallery2;
        $gallery3 = $request->gallery3;
        $gallery4 = $request->gallery4;

        if (!$informasi->first()) {
            $fileNameG1 = uniqid() . '.jpg';
            $fileNameG2 = uniqid() . '.jpg';
            $fileNameG3 = uniqid() . '.jpg';
            $fileNameG4 = uniqid() . '.jpg';
            $gallery1->move(public_path('data/informasi/'), $fileNameG1);
            $gallery2->move(public_path('data/informasi/'), $fileNameG2);
            $gallery3->move(public_path('data/informasi/'), $fileNameG3);
            $gallery4->move(public_path('data/informasi/'), $fileNameG4);
            Informasi::create([
                'id_user' => auth()->user()->id,
                'gallery1' => $fileNameG1,
                'gallery2' => $fileNameG2,
                'gallery3' => $fileNameG3,
                'gallery4' => $fileNameG4,
            ]);
        } else {
            if ($gallery1) {
                $fileName = uniqid() . '.jpg';
                $gallery1->move(public_path('data/informasi/'), $fileName);
                if ($informasi->first()->gallery1 != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->gallery1));
                }
                $informasi->update([
                    'gallery1' => $fileName,
                ]);
            }
            if ($gallery2) {
                $fileName = uniqid() . '.jpg';
                $gallery2->move(public_path('data/informasi/'), $fileName);
                if ($informasi->first()->gallery2 != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->gallery2));
                }
                $informasi->update([
                    'gallery2' => $fileName,
                ]);
            }
            if ($gallery3) {
                $fileName = uniqid() . '.jpg';
                $gallery3->move(public_path('data/informasi/'), $fileName);
                if ($informasi->first()->gallery3 != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->gallery3));
                }
                $informasi->update([
                    'gallery3' => $fileName,
                ]);
            }

            if ($gallery4) {
                $fileName = uniqid() . '.jpg';
                $gallery4->move(public_path('data/informasi/'), $fileName);
                if ($informasi->first()->gallery4 != '') {
                    unlink(public_path('data/informasi/' . $informasi->first()->gallery4));
                }
                $informasi->update([
                    'gallery4' => $fileName,
                ]);
            }
        }

        return redirect()->back()->with('message', 'berhsil disimpan');
    }
}
