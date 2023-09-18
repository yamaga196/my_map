<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailtext;
use App\Models\Map;

class DetailtextController extends Controller
{
    public function detail($id)
    {
        $maps = Map::find($id);
        $detail_text = Detailtext::where('maps_id',$maps->id)->get();
        return view('detail', compact('maps','detail_text'));
    }

    public function detail_create(Request $request,$id){
        Detailtext::create([
            'text' => $request->text,
            'maps_id' => $request->maps_id
        ]);

        $request->session()->regenerateToken();

        $maps = Map::find($id);
        $detail_text = Detailtext::where('maps_id',$maps->id)->get();
        return view('detail', compact('maps','detail_text'));
    }
}
