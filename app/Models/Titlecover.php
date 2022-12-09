<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titlecover extends Model
{
    use HasFactory;

    public $table = 'titlecovers';

    protected $fillable = [
        'title',
        'description',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
