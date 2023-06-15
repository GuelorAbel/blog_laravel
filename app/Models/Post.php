<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // les données dont l'utilisateurs est autorisé à modifier
    protected $fillable = [
        'title',
        'content'
    ];
}
