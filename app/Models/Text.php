<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use CrudTrait;
    use CrudTrait;
    protected $fillable = [
        'key',
        'pt',
        'en',
    ];
}
