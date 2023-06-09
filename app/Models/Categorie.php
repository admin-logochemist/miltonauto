<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    
    protected $table = "categori";
    protected $primaryKey = "category_id";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'meta_title',
        'meta_description',
    ];
}
