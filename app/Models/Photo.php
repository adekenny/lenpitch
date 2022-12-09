<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public $table = 'photos';
    

    protected $fillable = [
        'photo',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
