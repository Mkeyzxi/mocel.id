<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable
// {
//     use HasFactory, Notifiable, HasUuids;
// /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     // protected $table = 'users';

//     protected $fillable = [
//         'username',
//         'email',
//         'password',
//         'phone_number',
//         'is_admin'
//     ];
//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//     ];
//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     public function user()
//     {
//         return $this->belongsTo(User::class);
//     }
// }


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    protected $fillable = [
        'username',
        'email',
        'password',
        'phone_number',
        'is_admin',
        // 'profile'
    ];

    protected $hidden = [
        'password',
    ];
    // protected $attributes = [
    //     'profile' => 'profile_picture.png',
    // ];

    // public function artikels()
    // {
    //     return $this->hasMany(Artikel::class);
    // }
}