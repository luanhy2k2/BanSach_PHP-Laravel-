<?php

namespace App\Http\Controllers;
use App\Models\danhmucsModel;
use Illuminate\Http\Request;

class nguoiDungController extends Controller
{
    public function menu()
    {
        $danhmucs = DB::table('danhmucs')->select('*');
        $danhmucs = $danhmucs->get();

        $danhmuc = danhmucs::all();
        return view('Home.layoutHome', compact('danhmucs'));
        // return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    }
}
