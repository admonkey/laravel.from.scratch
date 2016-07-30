<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
  /**
  *  TODO: Function description
  *
  */
  public function index(){

    return view('cards.index');

  }

}
