<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        //$pizzas = Pizza::orderBy('name')->get();
        $pizzas = Pizza::all();
        //$pizzas = Pizza::where('type', 'special')->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' =>request('name')
        ]);
    }
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ["pizza" => $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->pizzas_name = request('pizzas_name');
        $pizza->address = request('address');
        $pizza->quantity = request('quantity');
        $pizza->type = request('type');
        $pizza->save();
        return redirect('/')->with('mssg', 'تشکر از سفارش شما ');
    }
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');


    }
}
