<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;

    public $table = 'employers';


     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'company',
        'address',
        'industry',
        'state',
        'country',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
