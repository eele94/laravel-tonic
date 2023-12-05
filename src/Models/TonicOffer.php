<?php

namespace Eele94\Tonic\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TonicOffer extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'vertical_id',
    ];

    public function vertical()
    {
        return $this->belongsTo(TonicVertical::class);
    }
}
