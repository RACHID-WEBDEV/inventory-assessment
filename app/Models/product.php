<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class product extends Model
{
    use Sluggable;

    use HasFactory;
    //Table Name
    protected $table = 'products';
    //Primary Key
    public $primarykey ='id';
    //Time Stamp
    public $timestamps = true;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}