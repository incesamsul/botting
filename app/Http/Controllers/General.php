<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Undangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;


class General extends Controller
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function dashboard()
    {
        if (auth()->user()->role != 'Administrator') {
            $data['hadir'] = Tamu::where('id_user', auth()->user()->id)->where('status_kehadiran', '1')->get();
            $data['tidak_hadir'] = Tamu::where('id_user', auth()->user()->id)->where('status_kehadiran', '0')->get();
            $data['total_tamu'] = Tamu::where('id_user', auth()->user()->id)->get();
            return view('pages.dashboard.index', $data);
        } else {
            $data['undangan'] = Undangan::all();
            $data['pengguna'] = User::all();
            return view('pages.dashboard.admin', $data);
        }
    }

    public function profile()
    {
        $data['user'] = $this->userModel->getUserProfile(auth()->user()->id);
        return view('pages.profile.index', $data);
    }

    public function bantuan()
    {
        return view('pages.bantuan.index');
    }

    public function ubahRole(Request $request)
    {
        User::where('id', auth()->user()->id)
            ->update(['role' => $request->post('role')]);
        return redirect()->back();
    }

    public function ubahFotoProfile(Request $request)
    {

        $extensions = ['jpg', 'jpeg', 'png'];

        $result = array($request->foto->getClientOriginalExtension());

        if (in_array($result[0], $extensions)) {
            $file = $request->foto;
        } else {
            return redirect()->back()->with('error', 'format file tidak di dukung');
        }

        // $fileName = auth()->user()->email . "." . $request->foto->extension();
        $fileName = uniqid() . "." . $request->foto->extension();
        $request->foto->move(public_path('data/foto_profile/' . $fileName . '/'), $fileName);

        // Storage::disk('uploads')->put($fileName, file_get_contents($request->foto->getRealPath()));

        User::where('id', auth()->user()->id)
            ->update(['foto' => $fileName]);
        return redirect()->back();
    }
}
