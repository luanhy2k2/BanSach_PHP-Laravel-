<?php

namespace App\Http\Controllers;
use App\Models\sanpham;
use App\Models\giaca;
use Carbon\Carbon;
use App\Models\loaisp;
use App\Models\nhasx;
use App\Models\tg;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\chitietkho;
class SanPhamController extends Controller
{
    
    public function hienthi()
    {
      
        $loaisp = loaisp::all();
        $tg = tg::all();
        $nhasx = nhasx::all();
        // $db = DB::table('sanpham')->join('tg', 'tg.tG_id', '=', 'sanpham.tg_id')->join('loaisp', 'loaisp.loai_id', '=', 'sanpham.sanp_id')
        // ->join('nhasx', 'nhasx.nsx_id', '=', 'sanpham.nsx_id')->join('giaca', 'giaca.sanp_id','=','sanpham.sanp_id')->select('sanpham.sanp_id','sanp_name','namsx','tg.tG_name','nhasx.nsx_name','loaisp.loai_name',
        // 'soTrang', 'size', 'tomtat', 'image','gia')->get();
        $db = sanpham::paginate(5);
        
        // $db = sanpham::all();
        
            
        if($key=request()->key){
            $db = sanpham::where('sanp_name', 'like', '%'.$key.'%')->paginate(2);
        }
        return view('Admin.sanpham.hienthi', ['sanpham'=>$db, 'loaisp'=>$loaisp, 'tg'=>$tg, 'nhasx'=>$nhasx])->with('i', (request()->input('page',1)-1)*5);
        // return view('Admin.sanpham.hienthi', ['sanpham'=>$db]);
    }
    public function update(Request $request, $id)
    {
        $db = sanpham::find($id);
        return response()->json(['data'=>$db]);
    }
    public function destroy(Request $res)
    {
        $id = $res->id;
        $db = sanpham::find($id)->delete();
       
        return redirect('/nhasx');
    }
    public function add(Request $req)
    {
            $db = new sanpham();
       
            $db->sanp_name = $req->name;
            $db->loai_id = $req->loaiId;
            $db->image = $req->image;
            $db->namsx = $req->namsx;
            $db->nsx_id = $req->nsxId;
            $db->size = $req->size;
            $db->soTrang = $req->soTrang;
            $db->tg_id = $req->tgId;
            $db->tomtat = $req->tomtat;
            
            $db->save();
            $gia = new giaca();
            $gia->sanp_id = $db->sanp_id;
            $gia->ngayBatDau= Carbon::now()->toDateString();
            $gia->gia = $req->gia;
            $gia->ngayKetThuc = Carbon::now()->toDateString();
            $gia->save();
            $ctl = new chitietkho();
            $ctl->maKho = '1';
            $ctl->sanp_id = $db->sanp_id;
            $ctl->soLuong = 0;
            $ctl->save();
   
        return redirect()->route('sanpham.hienthi');
    }
   
    
    public function edit(Request $req)
    {
       
        $id = $req->id;
        
        $db = sanpham::find($id);
        $db->sanp_name = $req->name;
        $db->loai_id = $req->loaiId;
        $db->image = $req->image;
        $db->namsx = $req->namsx;
        $db->nsx_id = $req->nsxId;
        $db->size = $req->size;
        $db->soTrang = $req->soTrang;
        $db->tg_id = $req->tgId;
        $db->tomtat = $req->tomtat;
      
        $db->save();
       
        return redirect()->route('sanpham.hienthi')->with('thong bao', 'update');;
    }
}
