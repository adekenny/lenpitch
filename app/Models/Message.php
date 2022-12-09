<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $table = 'messages';

    protected $fillable = [
       'receiver_id',
       'firstname',
       'surname',
       'title',
       'message',
       'sent_date',
   ];


    public function user(){
       return $this->belongsTo(user::class);
   }
}
