<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HistoryRequest;
use App\Models\History;

class HistoryController extends Controller
{
    public function save(HistoryRequest $request, History $history) {
        $input = $request['history'];
        
        if ($input['ratio_grade3'] == null || $input['ratio_grade3'] == 0 || $input['num_grade3'] == null || $input['num_grade3'] == 0) {
            $input['ratio_grade3'] = 0;
            $input['num_grade3'] = 0;
            
        }
        if ($input['ratio_grade2'] == null || $input['ratio_grade2'] == 0 || $input['num_grade2'] == null || $input['num_grade2'] == 0) {
            $input['ratio_grade2'] = 0;
            $input['num_grade2'] = 0;
        }
        if ($input['ratio_grade1'] == null || $input['ratio_grade1'] == 0 || $input['num_grade1'] == null || $input['num_grade1'] == 0) {
            $input['ratio_grade1'] = 0;
            $input['num_grade1'] = 0;
        }
        
        if ($input['ratio_grade3'] * $input['num_grade3'] + $input['ratio_grade2'] * $input['num_grade2'] + $input['ratio_grade1'] * $input['num_grade1'] == 0) {
            $input['sum_cost'] = 0;
            $input['cost_grade3'] = 0;
            $input['cost_grade2'] = 0;
            $input['cost_grade1'] = 0;
            $input['sum_people'] = 0;
            $input['collect_money'] = 0; 
            $input['change'] = 0;
            $input['average'] = 0;
        }    
        
        if ($input['ratio_grade3'] * $input['num_grade3'] + $input['ratio_grade2'] * $input['num_grade2'] + $input['ratio_grade1'] * $input['num_grade1'] != 0) {
            $input['cost_grade3'] = ceil($input['sum_cost'] * $input['ratio_grade3'] / ($input['ratio_grade3'] * $input['num_grade3'] + $input['ratio_grade2'] * $input['num_grade2'] + $input['ratio_grade1'] * $input['num_grade1']));
            $input['cost_grade2'] = ceil($input['sum_cost'] * $input['ratio_grade2'] / ($input['ratio_grade3'] * $input['num_grade3'] + $input['ratio_grade2'] * $input['num_grade2'] + $input['ratio_grade1'] * $input['num_grade1']));
            $input['cost_grade1'] = ceil($input['sum_cost'] * $input['ratio_grade1'] / ($input['ratio_grade3'] * $input['num_grade3'] + $input['ratio_grade2'] * $input['num_grade2'] + $input['ratio_grade1'] * $input['num_grade1']));
            $input['sum_people'] = $input['num_grade3'] + $input['num_grade2'] + $input['num_grade1'];
            $input['collect_money'] = $input['cost_grade3'] * $input['num_grade3'] + $input['cost_grade2'] * $input['num_grade2'] + $input['cost_grade1'] * $input['num_grade1']; 
            $input['change'] = $input['collect_money'] - $input['sum_cost'];
            $input['average'] = round($input['collect_money'] / $input['sum_people'], 2);
        }    
        // dd($input);
        
        $history->fill($input)->save();
        return redirect('/pages/enter');
    }
    
    public function index(History $history) {
        return view('pages.index')->with(['histories' => $history->orderBy('updated_at', 'DESC')->get()]);
    }
    
    public function show(History $history)
    {
        return view('pages.show')->with(['history' => $history]);
    }
    
    public function delete(History $history)
    {
        $history->delete();
        return redirect('/pages/index');
    }
}
