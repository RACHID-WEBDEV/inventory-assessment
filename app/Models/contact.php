<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
     //Table Name
     protected $table = 'contacts';
     //Primary Key
     public $primarykey ='id';
     //Time Stamp
     public $timestamps = true;
}
