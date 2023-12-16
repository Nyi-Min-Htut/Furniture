<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasFactory,HasApiTokens,Notifiable;

    protected $fillable = [
        'username',
        'password',
        'admin_type'
    ];

    protected $hidden= [
        'password',
        'remember_token'
    
    ];

    public function getAuthPassword(){
        return $this->password;
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
