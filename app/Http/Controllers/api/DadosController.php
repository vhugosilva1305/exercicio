<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use App\Models\Frame;
use App\Models\Text;

class DadosController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::orderByDesc('date')->get()->map(fn ($t) => [
            'name' => $t->name,
            'date' => optional($t->date)->format('d-m-Y'),
            'testimony' => $t->testimony,
        ])->values();

         $frames = Frame::orderBy('id')->get()->map(fn ($f) => [
        'url' => $f->url,])->values();

        $text = Text::all()->mapWithKeys(fn ($t) => [$t->key => ['pt' => $t->pt, 'en' => $t->en]]);

        return response()->json(['testimonies' => $testimonies, 'frames' => $frames, 'texts' => $text]);
    }
}

