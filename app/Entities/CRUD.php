<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
}
