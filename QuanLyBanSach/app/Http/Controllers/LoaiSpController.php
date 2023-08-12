<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaisp;
class LoaiSpController extends Controller
{
    public function hienthi()
    {
      

        $db = loaisp::paginate(5);
        return view('Admin.loaisp.hienthi', ['loaisp'=>$db])->with('i', (request()->input('page',1)-1)*5);
        // return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $db = loaisp::find($id)->delete();
       
        return redirect('/loaisp');
    }
    public function add(Request $req)
    {
            $db = new loaisp();
       
            $db->loai_name = $req->name;
            $db->danhmuc_id = $req->danhMucId;
            $db->save();         
   
        return redirect()->route('loaisp.hienthi');
    }
   
    public function update(Request $request, $id)
    {
        $db = loaisp::find($id);
        return response()->json(['data'=>$db]);
    }
      public function delete($id)
    {
       
        $loaisp = loaisp::find($id)->delete();
       
        return redirect('/danhmuc');
    }
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $db = loaisp::find($id);
        $db->loai_name = $req->name;
        $db->danhmuc_id = $req->danhMucId;
        $db->save();
       
        return redirect()->route('loaisp.hienthi')->with('thong bao', 'update');;
    }
}
