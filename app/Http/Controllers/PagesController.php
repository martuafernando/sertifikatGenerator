<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class PagesController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function list()
    {
        $users = DB::table('users')->get();
        return view('list', ['users' => $users]);
    }

    public function generate()
    {
        return view('generate');
    }

    public function sukses()
    {
        return view('sukses');
    }

    public function store(Request $request)
    {
        $nama = $request->nama;
        $acara = $request->acara;
        $tanggal = $request->tanggal;
        $data = ['nama' => $nama, 'acara' => $acara, 'tanggal' => $tanggal];

        DB::table('users')->insert($data);

        return redirect('/');
    }

    public function delete(Request $request)
    {
        DB::table('users')->where('id', $request->id)->delete();

        return redirect('/');
    }

    public function sertifikat(Request $request)
    {
        $file = $request->file('sertif');

        $tujuan_upload = 'desain';
        $file->move($tujuan_upload, 'background.png');

        $users = DB::table('users')->where('acara', $request->acara)->get();

        $hari = Carbon::parse($users->first()->tanggal)->translatedFormat('l, d F Y');


        foreach ($users as $user) {
            $image = Image::make('desain/background.png');
            $image->text($user->nama, 1600, 1025, function ($font) {
                $font->file(public_path('fonts/OpenSans-BoldItalic.ttf'));
                $font->size(180);
                $font->color('#414756');
                $font->align('center');
                $font->valign('top');
            });
            $image->text($request->acara, 1650, 1500, function ($font) {
                $font->file(public_path('fonts/Bangers-Regular.ttf'));
                $font->size(100);
                $font->color('#334b49');
                $font->align('center');
                $font->valign('top');
            });
            $image->text($hari, 2725, 1800, function ($font) {
                $font->file(public_path('fonts/calibri.ttf'));
                $font->size(50);
                $font->color('#414756');
                $font->align('center');
                $font->valign('top');
            });
            $image->save('sertifikat/' . $user->nama . '.png');
        }
        return redirect('/sukses');
    }
}
