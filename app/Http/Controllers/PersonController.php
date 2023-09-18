<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
  public function person_show()
  {
      $person = Person::where('user_id',Auth::id())->get();

      return view('person', compact('person'));
  }

  public function person_create(Request $request){

      Person::create([
          'name' => $request->name,
          'person_text' => $request->person_text,
          'user_id' => $request->user_id
      ]);

      $request->session()->regenerateToken();

      return redirect()->route('person_show');
  }
}
