<?php

namespace App\Http\Controllers;

use App\board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request){
        $items = board::all();
        return view('board.index',['items'=>$items]);
    }

    public function add(Request $request){
        return view('board.add');
    }

    public function create(Request $request){
        $this->validate($request,board::$rules);
        $board = new board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

}
