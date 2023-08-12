<?php

namespace App\Http\Controllers;
use App\Models\kho;
use Illuminate\Http\Request;
use App\Models\chitietkho;
use Illuminate\Support\Facades\DB;

class KhoController extends Controller
{
    public function hienthi()
    {
      

        $kho = kho::all();
        return view('Admin.kho.hienthi', compact('kho'));
        // return view('Home.layoutHome', ['danhmuc'=>$kho]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $kho = kho::find($id)->delete();
       
        return redirect('/kho');
    }
    public function add(Request $req)
    {
            $kho = new kho();
       
            $kho->tenKho = $req->name;
            
            $kho->save();         
   
        return redirect()->route('kho.hienthi');
    }
    public function addChiTietKho(Request $req, $id)
    {
            $chitietkho = new chitietkho();
            $chitietkho->maKho = $id;
            $chitietkho->sanp_id = $req->sanp;
            $chitietkho->soLuong = $req->soLuong;
            $kho->save();         
   
        return redirect()->route('kho.hienthi');
    }
      public function delete($id)
    {
       
        $kho = kho::find($id)->delete();
       
        return redirect('/kho');
    }
      public function deletechitiet($id)
    {
       
        $chitietkho = chitietkho::find($id)->delete();
       
        return redirect('/kho');
    }
    public function chitietkho($id)
    {
        $kho = DB::table('kho')
        ->select('maKho', 'tenKho')->where('maKho', '=', $id)->first();
        $ctkho = DB::table('chitietkho')->where('maKho', '=', $id)->get();
        return view('Admin.kho.chitiet',['kho'=>$kho, 'ctkho'=>$ctkho]);
    }
   
    
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $kho = kho::find($id);
        $kho->tenKho = $req->name;
        $kho->save();
       
        return redirect()->route('kho.hienthi')->with('thong bao', 'update');
    }
    public function update(Request $request, $id)
    {
        $kho = kho::find($id);
        return response()->json(['data'=>$kho]);
    }
    public function editview($id)
    {
        $kho = kho::find($id);
        return view('Admin.kho.hienthi', ['edit'=>$kho]);
    }
    // public function formedit($id){
    //     $db = kho::find($id);
    //     return view('Admin.danhmuc.edit', ['sp'=>$db]);
    // }
}
