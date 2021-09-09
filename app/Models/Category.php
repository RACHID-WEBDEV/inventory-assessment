<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    use HasFactory;
    //table name
    protected $table = 'categories';
    //Primary Key
    public $primarykey ='id';
    //Time Stamp
    public $timestamps = true;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'cat_description'
            ]
        ];
    }
}
