<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->hasMany(SpacePhoto::class, 'space_id', 'id');
    }

    public function getSpaces($latitude, $longtitude, $radius){
        // Jarak Mil = 3959
        // Jara Km = 6371
        return $this->select('spaces.*')
            ->selectRaw(
                '( 6371 * 
                    acos( cos( radians(?) ) *
                        cos( radians( latitude ) ) *
                        cos( radians( longitude ) - radians(?)) +
                        sin( radians(?) ) *
                        sin( radians( latitude ) )
                    )
                ) AS distance', [$latitude, $longtitude, $latitude]
        )
        ->havingRaw("distance < ?", [$radius])
        ->orderBy('distance','asc');

    }
}
