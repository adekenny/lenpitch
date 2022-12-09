<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public $table = 'cvs';

    protected $fillable = [
        'cv',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
