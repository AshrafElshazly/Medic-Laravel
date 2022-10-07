<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','date','doctor_id','message'];

    public static function rules()
    {
        return [
            'name'        => 'required|string|max:100',
            'phone'       => 'required|numeric|digits:11',
            'email'       => 'required|email|max:100',
            'date'        => 'required|date',
            'doctor'      => 'required|string',
            'department'  => 'required|string',
            'message'     => 'required|string'
        ];
    }
}
