<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable= ['name','email','img','feedback'];

    public static function rules()
    {
        return [
            'name'        => 'required|string|max:100',
            'email'       => 'required|email|max:100',
            'img'         => 'required|image|mimes:jpeg,jpg',
            'feedback'    => 'required|string'
        ];
    }
}
