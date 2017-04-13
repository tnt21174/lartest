<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Area;
use DateTime;

class AreaController extends Controller
{
    //
    public function getList () {
    	return Area::orderBy('id','DESC')->get();
    }
    public function getAdd(Request $request) {
    	$item = new Area;
    	$item->name    = $request->name;
    	$item->order     = $request->order;    	
    	$item->save();
    	return "ok";
    }
    public function getEdit($id){
        return Area::findOrFail($id);
    }
    public function postEdit(Request $request, $id){
        $item = Area::findOrFail($id);
        $item->name         = $request->name;
        $item->order          = $request->order;        
        $item->updated_at   = new DateTime();
        $item->save();
        return "ok";
    }
    public function getDelete($id){
        $item = Area::findOrFail($id);
        $item->delete();
        return "ok";
    }
}
