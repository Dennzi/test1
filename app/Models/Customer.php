<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $fillable =[
        'user_id',
        'user_name',
        'user_mail',
        'country_code',
        'language_code',
        'user_password'
    ];
    
    public function language()
    {
        return $this->hasOne('App\Models\Language', 'language_code', 'language_code');
    }

    public function country()
    {
        return $this->hasOne('App\Models\Country', 'country_code', 'country_code');
    }
}
