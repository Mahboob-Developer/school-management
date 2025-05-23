<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feestructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'academic_year_id',
        'fee_head_id', 
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
        'january',
        'february',
        'march',

    ];
    public function feehead(){
        return $this->belongsTo(feehead::class,'fee_head_id');

    }
    public function academicyear(){
        return $this->belongsTo(academicyear::class,'academic_year_id');
    }
    public function classes(){
        return $this->belongsTo(classes::class,'class_id');
    }

}
