<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function save(Request $request, History $history) {
        $input = $request['history'];
        $history->fill($input)->save();
        return redirect('/pages/enter');
    }
    
    public function index(History $history) {
        return view('pages.index')->with(['histories' => $history->get()]);
    }
    
    public function show(History $history)
    {
        return view('pages.show')->with(['history' => $history]);
    }
}
