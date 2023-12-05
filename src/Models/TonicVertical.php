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

    public function offers()
    {
        return $this->hasMany(TonicOffer::class, 'vertical_id');
    }
}
