<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use Illuminate\Support\Facades\Auth;

class DiaryController extends Controller
{
    public function diary_create(Request $request){
        //画像フォームでリクエストした画像を取得
        $img = $request->file('img_path');
        //storage > public > img配下に画像が保存される
        $path = $img->store('img','public');
            
        Diary::create([
                'date' => $request->date,
                'img_path' => $path,
                'english' => $request->english,
                'good_point' => $request->good_point,
                'bad_point' => $request->bad_point,
                'user_id' => $request->user_id
            ]);
            
            //リダイレクト
            return redirect()->route('diary_show');
    }

    public function diary_detail_show()
    {
        $diary = Diary::where('user_id',Auth::id())->get();

        return view('diary_detail', compact('diary'));
    }

    public function diary_detail_show_detail($id)
    {
        $diary = Diary::find($id);

        return view('diary_detail_show', compact('diary'));
    }
}
