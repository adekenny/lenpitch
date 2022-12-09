<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    use HasFactory;

    public $table = 'workexperiences';


    protected $fillable = [
        'title',
        'employment_type',
        'company_name',
        'location',
        'start_date',
        'end_date',
        'experience_years',
        'industry',
        'description',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
