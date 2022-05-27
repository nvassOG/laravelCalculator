<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $history = new History();
        
        $input = $request->input('input');
        $split = explode(' ', $input);
        $firstnumber = $split[0];
        $secondnumber = $split[2];
        $operator = $split[1];
        $result = 0;
        if($operator == '+') {
            $result = $firstnumber + $secondnumber;
        }elseif($operator == '-') {
            $result = $firstnumber - $secondnumber;
        }elseif($operator == '*') {
            $result = $firstnumber * $secondnumber;
        }elseif($operator == '/') {
            $result = $firstnumber / $secondnumber;
        }
        $history->result = ($firstnumber . " " . $operator . " " . $secondnumber . ' = ' . $result);
        $history->save();
        $firstnumber = $result;
        return redirect('/')->with('message',''.$result);
    }

    public function pullHistory()
    {
        $history = History::latest()->get();

        return view('calculator')->with('history', $history);
    }
}
