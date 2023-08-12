<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tg;
class TacGiaController extends Controller
{
    public function hienthi()
    {
      

        $db = tg::paginate(5);
        return view('Admin.tacgia.hienthi', ['tacgia'=>$db])->with('i', (request()->input('page',1)-1)*5);
        // return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $db = tg::find($id)->delete();
       
        return redirect('/tacgia');
    }
    public function update(Request $request, $id)
    {
        $db = tg::find($id);
        return response()->json(['data'=>$db]);
    }
    public function add(Request $req)
    {
            $db = new tg();
       
            $db->tG_name = $req->name;
            $db->tG_diaChi = $req->diaChi;
            $db->sdt = $req->sdt;
            $db->email = $req->email;
            $db->save();         
   
        return redirect()->route('tacgia.hienthi');
    }
   
    
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $db = tg::find($id);
        $db->tG_name = $req->name;
        $db->tG_diaChi = $req->diaChi;
        $db->sdt = $req->sdt;
        $db->email = $req->email;
        $db->save();
       
        return redirect()->route('tacgia.hienthi')->with('thong bao', 'update');;
    }
}
