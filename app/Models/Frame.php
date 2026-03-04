<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Frame extends Model
{
    use CrudTrait;

    protected $fillable = ['url'];

    public function setUrlAttribute($value): void
    {
        if ($value instanceof UploadedFile) {
            $original = $value->getClientOriginalName(); // Moldura_2.png

            // guarda em storage/app/public/frames/Moldura_2.png
            $value->storeAs('frames', $original, 'public');

            // grava só o nome na BD
            $this->attributes['url'] = $original;
            return;
        }

        $this->attributes['url'] = $value;
    }
}