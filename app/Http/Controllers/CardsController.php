<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CardsController extends Controller
{
  /**
  *  TODO: Function description
  *
  */
  public function index(){

    $cards = DB::table('cards')->get();
    return view('cards.index',compact('cards'));

  }

}
