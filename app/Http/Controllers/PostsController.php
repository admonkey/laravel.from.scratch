<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{

    public function index(Request $request)
    {
            return $request->all();
    }
}
