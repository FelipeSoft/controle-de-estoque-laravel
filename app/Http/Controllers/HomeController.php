<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transact;

class HomeController extends Controller
{
    public function index(){
        $transactions = Transact::all();
        $filtered_entries =  Transact::all()->where('type', '=', 'Entrada');
        $filtered_exits =  Transact::all()->where('type', '=', 'Saída');

        $total = 0;
        $entries = 0;
        $exits = 0;
        
        foreach( $transactions as $transact ){
            $total += $transact['quantity'] * $transact->product['price'];
        }

        foreach($filtered_entries as $ent){
            $entries += $ent['quantity'] * $ent->product['price'];
        }

        foreach($filtered_exits as $ext){
            $exits += $ext['quantity'] * $ext->product['price'];
        }

        $current_stock = $entries - $exits;

        return view('home', ['total_stock_value' => $current_stock, 'entries' => $entries, 'exits' => $exits]);
    }
}
