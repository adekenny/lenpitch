<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public $table = 'educations';

    protected $fillable = [
        'institution',
        'qualification',
        'study_field',
        'start_date',
        'end_date',
        'grade',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
