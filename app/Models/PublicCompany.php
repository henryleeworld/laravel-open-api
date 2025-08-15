<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicCompany extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'incorporation_date' => 'datetime:Y-m-d',
            'listing_date'       => 'datetime:Y-m-d',
        ];
    }
}
