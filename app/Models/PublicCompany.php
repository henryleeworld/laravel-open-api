<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicCompany extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'incorporation_date' =>  'datetime:Y-m-d',
            'listing_date'       =>  'datetime:Y-m-d',
        ];
    }
}
