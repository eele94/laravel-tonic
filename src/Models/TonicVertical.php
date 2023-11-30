<?php

namespace Eele94\Tonic\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TonicVertical extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];
}
