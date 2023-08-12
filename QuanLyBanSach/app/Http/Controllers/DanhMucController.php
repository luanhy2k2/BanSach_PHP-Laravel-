<?php

namespace App\Http\Controllers;
use App\Models\danhmucs;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function hienthi(Request $req)
    {
        
        $db = danhmucs::paginate(5);
        if($key=request()->key){
            $db = danhmucs::where('danhmuc_name', 'like', '%'.$key.'%')->paginate(5);
        }
        
        return view('Admin.danhmuc.danhMuc', ['danhmucs'=>$db])->with('i', (request()->input('page',1)-1)*5);
        // return view('Home.layoutHome', ['danhmuc'=>$danhmucs]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $danhmucs = danhmucs::find($id)->delete();
       
        return redirect('/danhmuc');
    }
    public function delete($id)
    {
       
        $danhmucs = danhmucs::find($id)->delete();
       
        return redirect('/danhmuc');
    }
    public function add(Request $req)
    {
            $danhmucs = new danhmucs();
       
            $danhmucs->danhmuc_name = $req->name;
          
            $danhmucs->save();         
   
        return redirect()->route('danhmuc.danhmuc');
    }
   
    
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $danhmucs = danhmucs::find($id);
        $danhmucs->danhmuc_name = $req->name;
        $danhmucs->save();
       
        return redirect()->route('danhmuc.danhmuc')->with('thong bao', 'update');
    }
    public function update(Request $request, $id)
    {
        $danhmucs = danhmucs::find($id);
        return response()->json(['data'=>$danhmucs]);
    }
    public function editview($id)
    {
        $danhmucs = danhmucs::find($id);
        return view('Admin.danhmuc.danhMuc', ['edit'=>$danhmucs]);
    }
    // public function formedit($id){
    //     $db = danhmucs::find($id);
    //     return view('Admin.danhmuc.edit', ['sp'=>$db]);
    // }
}
