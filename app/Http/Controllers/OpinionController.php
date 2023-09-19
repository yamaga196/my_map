<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function opinion_show(){
        return view('opinion');
    }

    public function opinion(Request $request){

        Opinion::create([
            'opinion' => $request->opinion,
        ]);

        $request->session()->regenerateToken();

        return redirect()->route('opinion');
    }
}
