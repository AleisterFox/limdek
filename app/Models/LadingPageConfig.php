<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LadingPageConfig extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getInstance(): LadingPageConfig
    {
        if (self::count() === 0) {
            return self::create();
        }

        return self::first();
    }
}
