<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
     public $table = 'bookmarks';

     protected $fillable = [
        'profile_id',
        'firstname',
        'surname',
        'phone',
        'email',
        'gender',
        'category',
    ];


     public function user(){
        return $this->belongsTo(user::class);
    }
}
