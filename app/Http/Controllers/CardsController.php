<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
  /**
  *  TODO: Function description
  *
  */
  public function index(){

//     $cards = DB::table('cards')->get();
    $cards = Card::all();
    return view('cards.index',compact('cards'));

  }

  public function show($card){

    return $card;

  }

}
