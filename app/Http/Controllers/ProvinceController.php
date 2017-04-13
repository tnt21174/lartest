<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Province;
use DateTime;

class ProvinceController extends Controller
{
    //
    public function getList () {
    	return Province::orderBy('id','DESC')->get();
    }
    public function getAdd(Request $request) {
    	$item = new Province;
    	$item->name    = $request->name;
        $item->province_code    = $request->province_code;
    	$item->order     = $request->order;    	
    	$item->save();
    	return "ok";
    }
    public function getEdit($id){
        return Province::findOrFail($id);
    }
    public function postEdit(Request $request, $id){
        $item = Province::findOrFail($id);
        $item->name         = $request->name;
        $item->province_code         = $request->province_code;
        $item->order          = $request->order;        
        $item->updated_at   = new DateTime();
        $item->save();
        return "ok";
    }
    public function getDelete($id){
        $item = Province::findOrFail($id);
        $item->delete();
        return "ok";
    }
}
