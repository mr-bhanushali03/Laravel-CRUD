<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'gender',
        'languages',
        'email',
        'mobile',
        'password',
        'date',
        'caste',
        'file'
    ];
   
    // public function getLanguagesAttribute($value)
    // {
    //     return explode(',',$value);
    // }
    public function setLanguagesAttribute($value)
    {
        // if (is_array($value)) {
        //     $value = implode(',', $value);
        // } elseif (is_string($value)) {
        //     $value = explode(',', $value);
        // }
        // $this->attributes['languages'] = $value;
        $this->attributes['languages']= implode(',',$value);
    }
}
