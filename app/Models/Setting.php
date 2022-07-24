<?php

namespace App\Models;

use App\Scopes\SettingScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Setting extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new SettingScope);
    }
}
