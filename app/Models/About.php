<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Oneduo\NovaFileManager\Casts\AssetCollection;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'birthday' => 'date',
        'cv' => AssetCollection::class
    ];
}
