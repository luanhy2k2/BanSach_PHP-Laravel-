<?php

namespace App\Http\Controllers;
use App\Models\nhasx;
use Illuminate\Http\Request;


class NhaXuatBanController extends Controller
{
    public function hienthi()
    {
      

        $db = nhasx::all();
        return view('Admin.nhasx.hienthi', ['nhasx'=>$db]);
        // return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    }
    public function update(Request $request, $id)
    {
        $db = nhasx::find($id);
        return response()->json(['data'=>$db]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $db = nhasx::find($id)->delete();
       
        return redirect('/nhasx');
    }
    public function add(Request $req)
    {
            $db = new nhasx();
       
            $db->nsx_name = $req->name;
            $db->diaChi = $req->diaChi;
            $db->sdt = $req->sdt;
          
            $db->save();         
   
        return redirect()->route('nhasx.hienthi');
    }
   
    
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $db = nhasx::find($id);
        $db->nsx_name = $req->name;
        $db->diaChi = $req->diaChi;
        $db->sdt = $req->sdt;
      
        $db->save();
       
        return redirect()->route('nhasx.hienthi')->with('thong bao', 'update');;
    }
}
