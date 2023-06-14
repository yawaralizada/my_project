<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
class ReserveController extends Controller
{
    public function index(){
        //$pizzas = Pizza::orderBy('name')->get();
        $reserves = Reserve::all();
        //$pizzas = Pizza::where('type', 'special')->get();
        return view('reserves.index', [
            'reserves' => $reserves,
            'name' =>request('name')
        ]);
    }

    public function show($id){
        $reserve = Reserve::findOrFail($id);
        return view('reserves.show', ["reserve" => $reserve]);
    }

    public function create(){
        return view('reserves.create');
    }
    public function store(){
        $reserve = new Reserve();
        $reserve->name = request('name');
        $reserve->board_number = request('board_number');
        $reserve->date = request('date');
        $reserve->location = request('location');
        $reserve->type = request('type');
        $reserve->save();
        return redirect('/')->with('mssg', 'تشکر از ریزرو شما');
    }
    public function destroy($id){
        $reserve = Reserve::findOrFail($id);
        $reserve->delete();
        return redirect('/reserves');
    }
}
