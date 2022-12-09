<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'surname',
        'phone',
        'email',
        'category',
        'gender',
        'user_type',
        'status',
        'verification',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function titlecover()
    {
        return $this->hasOne(Titlecover::class);
    }


    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function workexperiences()
    {
        return $this->HasMany(Workexperience::class);
    }


    public function photo(){
        return $this->hasOne(Photo::class);
    }


    public function cv()
    {
        return $this->hasOne(Cv::class);
    }

    public function video(){

        return $this->hasOne(Video::class);
    }

    public function documents(){
        return $this->HasMany(Document::class);
    }


    public function employer(){
        return $this->hasOne(Employer::class);
    }

    public function bookmarks(){
        return $this->HasMany(Bookmark::class);
    }

    public function messages(){
        return $this->HasMany(Message::class);
    }


}
