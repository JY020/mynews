<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Profile;

class ProfileController extends Controller

{
  public function index(Request $request)
    {
      $profile = Profile::all();
      
        if (empty($profile)) {
            abort (404);
        } 
        return view('profile.index', ['profile_form' => $profile]);
    }
}