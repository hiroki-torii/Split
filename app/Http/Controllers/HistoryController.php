<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function save(Request $request) {
        dd($request['name']);
    }
    
    public function index(History $history) {
        return view('pages.index')->with(['histories' => $history->get()]);
    }
}
