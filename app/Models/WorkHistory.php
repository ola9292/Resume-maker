<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;
    protected $table = 'work_history';
    protected $fillable = [
        'user_id',
        'company',
        'position',
        'start_year',
        'end_year',
        'duties'
    ];
}
