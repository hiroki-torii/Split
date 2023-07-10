<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'name',
        'sum_cost',
        'num_grade3',
        'cost_grade3',
        'ratio_grade3',
        'num_grade2',
        'cost_grade2',
        'ratio_grade2',
        'num_grade1',
        'cost_grade1',
        'ratio_grade1',
        'sum_people',
        'collect_money',
        'change',
        'average',
        ];
}
