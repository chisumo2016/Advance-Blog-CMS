<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostApiController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('role:superadministrator|administrator|editor|author|contributor');
    }

    //
    public function  apiCheckUnique(Request $request)
    {
        return json_encode(!Post::where('slug', '=', $request->slug)->exists());
    }
}
