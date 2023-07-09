<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function save(Request $request) {
        dd($request['name']);
    }
    
    public function display(History $history) {
        dd($history->get());
    }
}
