<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use CrudTrait;
    protected $fillable = [
        'name',
        'date',
        'testimony',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}