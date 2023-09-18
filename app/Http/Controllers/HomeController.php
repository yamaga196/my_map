<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_id = Map::where('user_id',Auth::id())->get('id');
        $data_id_count = $data_id->count();
        $data_longitude = Map::where('user_id',Auth::id())->get('longitude');
        $data_latitude = Map::where('user_id',Auth::id())->get('latitude');
        $data_explanation = Map::where('user_id',Auth::id())->get('explanation');

        return view('home', compact('data_id','data_id_count','data_longitude','data_latitude','data_explanation'));
    }

    public function create(Request $request){

        Map::create([
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'explanation' => $request->explanation,
            'explanation_text' => $request->explanation_text,
            'user_id' => $request->user_id
        ]);

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function show()
    {
        $data_id = Map::where('user_id',Auth::id())->get();

        return view('welcome', compact('data_id'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function diary_show()
    {
        return view('diary');
    }

}
