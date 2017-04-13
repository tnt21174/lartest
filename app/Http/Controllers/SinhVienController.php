<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\SinhVien;
use DateTime;

class SinhVienController extends Controller
{
    //
    public function getList () {
    	return SinhVien::orderBy('id','DESC')->get();
    }
    public function getAdd(Request $request) {
    	$item = new SinhVien;
    	$item->name    = $request->name;
    	$item->age     = $request->age;
    	$item->email   = $request->email;
    	$item->phone   = $request->phone;
    	$item->save();
    	return "ok";
    }
    public function getEdit($id){
        return SinhVien::findOrFail($id);
    }
    public function postEdit(Request $request, $id){
        $item = SinhVien::findOrFail($id);
        $item->name         = $request->name;
        $item->age          = $request->age;
        $item->email        = $request->email;
        $item->phone        = $request->phone;
        $item->updated_at   = new DateTime();
        $item->save();
        return "ok";
    }
    public function getDelete($id){
        $item = SinhVien::findOrFail($id);
        $item->delete();
        return "ok";
    }
}
