<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookieConsent extends Model
{
    //Champ remplissable avec create()
    protected $fillable = ['consent', 'ip_address', 'user_agent'];
}
